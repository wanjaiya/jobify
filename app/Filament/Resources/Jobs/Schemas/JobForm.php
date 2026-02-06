<?php

namespace App\Filament\Resources\Jobs\Schemas;

use App\Models\Company;
use App\Models\Skill;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Wizard;
use Filament\Schemas\Components\Wizard\Step;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Select;
use Filament\Schemas\Components\Group;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Repeater;
use Filament\Actions\Action;
use Filament\Forms\Components\DatePicker;



class JobForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
            //

            Wizard::make([
                Step::make('Job Information')
                ->description('Job title and description')
                ->schema([
                    //
                    Group::make()
                    ->schema([
                        Select::make('company_id')
                        ->label('Company')
                        ->options(Company::all()->pluck('name', 'id'))
                        ->required(),
                        TextInput::make('title')->required(),
                    ])->columns(2),
                    Textarea::make('summary')->required(),
                    MarkdownEditor::make('description')->required(),


                ]),
                Step::make('Job Details')
                ->description('Type, location, experience')
                ->schema([
                    Select::make('employment_type')
                    ->options([
                        'full_time' => 'Full Time',
                        'part_time' => 'Part Time',
                        'contract' => 'Contract',
                        'internship' => 'Internship',
                    ])->required(),
                    Select::make('experience_level')
                    ->options([
                        'junior' => 'Junior',
                        'mid' => 'Mid',
                        'senior' => 'Senior',
                        'lead' => 'Lead',
                    ]),
                    TextInput::make('min_experience_years')->numeric()->minValue(0),
                    Select::make('location_type')
                    ->options([
                        'onsite' => 'Onsite',
                        'remote' => 'Remote',
                        'hybrid' => 'Hybrid',
                    ])->required(),
                    TextInput::make('location')->visible(fn($get) => $get('location_type') !== 'remote'),

                ]),
                Step::make('Compensation')
                ->description('Optional but recommended')
                ->schema([
                    //
                    TextInput::make('salary_min')->numeric()->minValue(0),
                    TextInput::make('salary_max')->numeric()->minValue(0),
                    Select::make('salary_currency')
                    ->options([
                        'USD' => 'USD',
                        'EUR' => 'EUR',
                        'GBP' => 'GBP',
                        'KES' => 'KES',
                    ])->required(),
                    Select::make('salary_period')
                    ->options([
                        'yearly' => 'Yearly',
                        'monthly' => 'Monthly',

                    ]),
                    Toggle::make('salary_visible')->label('Show Salary publicly'),
                ]),


                Step::make('Skills & Requirements')
                ->description('What are client is looking for?')
                ->schema([
                    //
                    Select::make('work_skills')
                    ->multiple()
                    ->preload()
                    ->searchable()
                    ->relationship('workSkills', 'name', modifyQueryUsing: fn ($query) => $query)
                        ->createOptionForm([
                            TextInput::make('name')
                                ->required()
                                ->rule('unique:work_skills,name'),

                            TextInput::make('category'),
                        ])

                        ->createOptionUsing(function (array $data) {
                            return Skill::firstOrCreate(
                                ['name' => ucfirst(strtolower($data['name']))],
                                ['category' => $data['category'] ?? null]
                            )->name;
                        })
                    ->helperText('Select existing skills or create new ones'),

                    Repeater::make('requirements')
                    ->schema([
                        TextInput::make('requirement')->label('Requirement'),
                    ])
                    ->label('Requirements')
                    ->collapsible(),

                    Repeater::make('responsibilities')
                    ->schema([
                        TextInput::make('responsibility')->label('Responsibility'),
                    ])
                    ->label('Responsibilities')
                    ->collapsible(),
                ]),
                Step::make('Publish')
                ->description('Publish Job')
                ->schema([
                    Toggle::make('is_featured')->label('Feature this job'),
                    Select::make('status')
                    ->options([
                        'draft' => 'Draft',
                        'published' => 'Published',
                        'paused' => 'Paused',
                        'closed' => 'Closed',

                    ]),


                    DatePicker::make('featured_until')->label('Featured Until'),
                    DatePicker::make('published_at')->label('Published At'),
                    DatePicker::make('expires_at')->label('Expires At'),


                ])

            ])
            ->columnSpanFull()
            ->submitAction(
            Action::make('save')
            ->label('Save Job')
            ->button()
            ->color('primary')
            ->submit("save")
        )
        ]);
    }
}
