<div class="mb-6">
    <h3 class="text-xl font-heading font-semibold text-text-primary mb-4">Resume & Documents</h3>

    <div class="space-y-3" id="documents-list" x-data="documentList()" x-init="load()">
        <!-- File Upload Area -->
        <div class="card bg-background-secondary border-2 border-dashed border-border-neutral hover:border-primary transition-smooth mb-6"
            id="upload-area" :class="dragging ? 'border-blue-500 bg-blue-50' : 'border-gray-300'"
            @dragover.prevent="dragging = true" @dragleave.prevent="dragging = false" @drop.prevent="handleDrop($event)"
            @click="$refs.fileInput.click()">
            <div class="text-center py-12">
                <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1967dbfdc-1767623595298.png"
                    alt="Upload cloud icon" class="w-16 h-16 mx-auto mb-4"
                    onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                <h4 class="font-heading font-semibold text-text-primary mb-2">Drop your resume here</h4>
                <p class="text-sm text-text-secondary mb-4">or click to browse files</p>
                <input type="file" id="resume-upload" class="hidden" accept=".pdf,.doc,.docx" multiple
                    x-ref="fileInput" @change="uploadFiles($event)">
                <button class="btn btn-primary">
                    <img src="https://img.rocket.new/generatedImages/rocket_gen_img_1967dbfdc-1767623595298.png"
                        alt="Upload icon" class="w-5 h-5 mr-2"
                        onerror="this.src='https://images.unsplash.com/photo-1584824486509-112e4181ff6b?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'; this.onerror=null;">
                    Choose File
                </button>
                <p class="text-xs text-text-tertiary mt-3 font-caption">Supported formats: PDF, DOC, DOCX (Max 5MB)</p>
            </div>
        </div>

        <!-- Upload progress -->
        <template x-if="uploading">
            <p class="mt-2 text-sm text-blue-600">
                Uploading <span x-text="progress + '%'"></span>
            </p>
        </template>

        <!-- Document Item 1 -->
        <template x-for="doc in documents" :key="document.id">
            <div class="card bg-surface flex items-center justify-between document-item">
                <div class="flex items-center gap-4 flex-1">
                    <div class="flex-1 min-w-0">
                        <h4 class="font-heading font-medium text-text-primary text-ellipsis-1"
                            x-text="doc.document_name">

                        </h4>
                        <div class="flex items-center gap-3 text-sm text-text-secondary mt-1">
                            <span class="font-caption"
                                x-text="`${(doc.document_size / 1024 / 1024).toFixed(2)} MB`"></span>
                            <span class="text-text-tertiary">•</span>
                            <span class="font-caption" x-text="`Uploaded ${doc.created_at}`"></span>

                        </div>
                    </div>
                    <div class="flex items-center gap-2 flex-shrink-0">


                        <a :href="`/storage/${doc.path}`" target="_blank" class="text-text-secondary mr-3">
                            <i class="fa-solid fa-download"></i>
                        </a>

                        <button @click="openDeleteModal(doc)" class="text-text-primary">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>

                </div>
            </div>

        </template>


         <div x-show="showDeleteModal" x-transition.opacity
              class="fixed inset-0 z-50 flex items-center justify-center bg-black/50">
              <div @click.outside="closeDeleteModal" class="bg-white rounded-lg w-full max-w-md p-6">
                  <h2 class="text-lg font-semibold text-gray-900">
                      Delete experience
                  </h2>

                  <p class="text-sm text-gray-600 mt-2">
                      Are you sure you want to delete
                      <span class="font-medium" x-text="selectedDocument?.document_name"></span>?
                      This action cannot be undone.
                  </p>

                  <div class="flex justify-end gap-3 mt-6">
                      <button @click="closeDeleteModal" class="px-4 py-2 text-sm border rounded" :disabled="deleting">
                          Cancel
                      </button>

                      <button @click="deleteDocument" class="px-4 py-2 text-sm bg-red-600 text-white rounded"
                          :disabled="deleting">
                          <span x-show="!deleting">Delete</span>
                          <span x-show="deleting">Deleting...</span>
                      </button>
                  </div>
              </div>
          </div>


    </div>
</div>
@push('scripts')
    <script>
        function documentList() {
            return {
                documents: [],
                showDeleteModal: false,
                deleting: false,
                selectedDocument: null,
                dragging: false,
                uploading: false,
                progress: 0,

                load() {
                    fetch('/candidate/documents')
                        .then(r => r.json())
                        .then(data => this.documents = data)
                },

                handleDrop(e) {
                    this.dragging = false;
                    this.uploadFiles(e.dataTransfer.files);
                },
                uploadFiles(event) {
                    const files = event.target?.files || event;
                    if (!files.length) return;

                    const formData = new FormData();
                    [...files].forEach(file => {
                        formData.append('files[]', file);
                    });

                    this.uploading = true;
                    this.progress = 0;

                    const xhr = new XMLHttpRequest();
                    xhr.open('POST', '/candidate/documents', true);
                    xhr.setRequestHeader(
                        'X-CSRF-TOKEN',
                        document.querySelector('meta[name=csrf-token]').content
                    );

                    xhr.upload.onprogress = (e) => {
                        if (e.lengthComputable) {
                            this.progress = Math.round((e.loaded / e.total) * 100);
                        }
                    };

                    xhr.onload = () => {
                        this.uploading = false;
                        if (xhr.status === 201) {

                            this.load(); 

                            showToast('Document Uploaded Successfully', 'success');
                        } else {
                            showToast('Upoad failed', 'error');

                        }
                    };

                    xhr.send(formData);
                },

                openDeleteModal(doc) {
                    this.selectedDocument = doc
                    this.showDeleteModal = true
                },

                closeDeleteModal() {
                    this.showDeleteModal = false
                    this.selectedDocument = null
                },

                async deleteDocument() {
                    if (!this.selectedDocument) return
                    this.deleting = true

                    try {

                        const response = await fetch(
                            this.selectedDocument.delete_url, {
                                method: 'DELETE',
                                headers: {
                                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                                    'X-Requested-With': 'XMLHttpRequest',
                                    'Accept': 'application/json',
                                },
                            }
                        )

                        if (!response.ok) {
                            throw new Error('Delete failed')
                        }

                        // Remove from UI AFTER success
                        this.documents = this.documents.filter(
                            e => e.id !== this.selectedDocument.id
                        )

                        this.closeDeleteModal()

                        showToast('Document deleted successfully', 'success')

                    } catch (e) {
                        console.error(e)
                        showToast('Failed to delete document', 'error')
                    } finally {
                        this.deleting = false
                    }
                }
            }
        }
    </script>
@endpush
