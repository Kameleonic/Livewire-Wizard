<div>
    <div class="row mt-5">
        <div class="col-md-6 offset-3">
            <div class="card">
                <div class="card-header bg-info text-white">
                    @if (!empty($successMessage))
                        <div class="alert alert-success">
                            {{ $successMessage }}
                        </div>
                    @endif
                    <ul class="nav nav-pills nav-fill">
                        <li class="nav-item">
                            <a class="nav-link {{ $currentSection != 1 ? '' : 'active' }}" href="#step1">Step 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $currentSection != 2 ? '' : 'active' }}" href="#step2">Step 2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $currentSection != 3 ? '' : 'active' }}" href="#step3">Step 3</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ $currentSection != 4 ? '' : 'active' }}" href="#step3">Step 4</a>
                        </li>
                    </ul>
                    <h5><strong>Laravel Livewire Bootstrap Modal Example - NiceSnippets.com</strong></h5>
                </div>
                <div class="card-body">
                    <div class="row pt-3">
                        {{-- Step 1 --}}
                        <div id="step1" class="needs-validation" style="display: {{ $currentSection != 1 ? 'none' : '' }}">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" wire:model="name" class="form-control {{$errors->first('name') ? "is-invalid" : "" }}" id="name" aria-describedby="name">
                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" wire:model="username" class="form-control {{$errors->first('username') ? "is-invalid" : "" }}" id="username">
                                @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="birth_place" class="form-label">Birth Place</label>
                                <input type="text" wire:model="companyName" class="form-control {{$errors->first('companyName') ? "is-invalid" : "" }}" id="birth_place">
                                @error('companyName')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="birth_date" class="form-label">Birth Date</label>
                                <input type="date" wire:model="industry" class="form-control {{$errors->first('industry') ? "is-invalid" : "" }}" id="birth_date">
                                @error('industry')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="companySize" class="form-label">Company Size</label><br>
                                <label class="radio-inline me-2"><input type="radio" wire:model="companySize" class="me-2" value="married"
                                    {{{ $companySize == 'married' ? "checked" : "" }}}>Large</label>
                                <label class="radio-inline"><input type="radio" wire:model="companySize" class="me-2" value="small"
                                        {{{ $companySize == 'small' ? "checked" : "" }}}>Small</label>
                                @error('companySize') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <button class="btn btn-primary" wire:click="step1"
                                type="button">Next</button>
                        </div>

                        {{-- Step 2 --}}
                        <div id="step2" style="display: {{ $currentSection != 2 ? 'none' : '' }}">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" wire:model="email" class="form-control {{$errors->first('email') ? "is-invalid" : "" }}" id="email" aria-describedby="email">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="number" wire:model="phone" class="form-control {{$errors->first('phone') ? "is-invalid" : "" }}" id="phone">
                                @error('phone')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <button class="btn btn-danger" type="button" wire:click="back(1)">Back</button>
                            <button class="btn btn-primary" type="button" wire:click="step2">Next</button>
                        </div>

                        {{-- Step 3 --}}
                        <div id="step3" style="display: {{ $currentSection != 3 ? 'none' : '' }}">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Name: {{$name}}</li>
                                <li class="list-group-item">Username: {{ $username }}</li>
                                <li class="list-group-item">Birth Place: {{ $companyName }}</li>
                                <li class="list-group-item">Birth Date: {{ $industry }}</li>
                                <li class="list-group-item">companySize: {{$companySize ? 'Married' : 'Single'}}</li>
                                <li class="list-group-item">Email: {{ $email }}</li>
                                <li class="list-group-item">Phone: {{ $phone }}</li>
                            </ul>
                            <button class="btn btn-danger" type="button" wire:click="back(1)">Back</button>
                            <button class="btn btn-primary" type="button" wire:click="step2">Next</button>
                        </div>

                        {{-- Step 4 --}}
                        <div id="step3" style="display: {{ $currentSection != 4 ? 'none' : '' }}">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Name: {{$name}}</li>
                                <li class="list-group-item">Username: {{ $username }}</li>
                                <li class="list-group-item">Company Name: {{ $companyName }}</li>
                                <li class="list-group-item">Industry: {{ $industry }}</li>
                                <li class="list-group-item">Company Size: {{$companySize ? 'Small' : 'Large'}}</li>
                                <li class="list-group-item">Email: {{ $email }}</li>
                                <li class="list-group-item">Phone: {{ $phone }}</li>
                            </ul>
                            <button class="btn btn-danger" type="button" wire:click="back(2)">Back</button>
                            <button class="btn btn-success" wire:click="step3" type="button">Finish</button>
                        </div>
                    </div>
                    <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true close-btn">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Laravel Livewire Bootstrap Modal Example - NiceSnippets.com
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary close-btn"
                                        data-dismiss="modal">Close</button>
                                    <button type="button" wire:click.prevent="store()"
                                        class="btn btn-primary close-modal">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
