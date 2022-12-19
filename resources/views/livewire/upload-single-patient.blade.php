<div>
    <form wire:submit.prevent="addSingle" method="POST">
        <div class="row justify-content-start">
            <div class="mb-3 col-md-6 text-left">
                <label for="">HIV Clinic No.</label>
                <input type="text" class="form-control @error('hiv_clinic_no') is-invalid @enderror"
                    wire:model="hiv_clinic_no" wire:focusout="filterPatient({{ $hiv_clinic_no }})">
                @error('hiv_clinic_no')
                    <span class="text-danger" role="alert">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3 col-md-6">
                <label for="">Family Name</label>
                <input type="text" placeholder="" class="form-control @error('family_name') is-invalid @enderror"
                    wire:model="family_name">
                @error('family_name')
                    <span class="text-danger" role="alert">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3 col-md-6">
                <label for="">Given Name</label>
                <input type="text" placeholder="" class="form-control @error('given_name') is-invalid @enderror"
                    wire:model="given_name">
                @error('given_name')
                    <span class="text-danger" role="alert">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3 col-md-6">
                <label for="">Select Gender</label>
                <select id="" class="form-control" wire:model="gender">
                    <option>Select Gender</option>
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                </select>
                @error('gender')
                    <span class="text-danger" role="alert">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3 col-md-6">
                <label for="">HIV Viral Load Date</label>
                <input type="date"
                    class="form-control @error('hiv_viral_load_date') is-invalid @enderror"
                    wire:model="hiv_viral_load_date">
                @error('hiv_viral_load_date')
                    <span class="text-danger" role="alert">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3 col-md-6">
                <label for="">Return Visit Date</label>
                <input type="date" placeholder=""
                    class="form-control @error('return_visit_date') is-invalid @enderror"
                    wire:model="return_visit_date">
                @error('return_visit_date')
                    <span class="text-danger" role="alert">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3 col-md-6">
                <label for="">Phone Number</label>
                <input type="text" placeholder="" class="form-control @error('phone_number') is-invalid @enderror"
                    wire:model="phone_number">
                @error('phone_number')
                    <span class="text-danger" role="alert">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3 col-md-6">
                <label for="">Care Giver Phone Number</label>
                <input type="text" placeholder=""
                    class="form-control @error('care_giver_phone_number') is-invalid @enderror"
                    wire:model="care_giver_phone_number">
                @error('care_giver_phone_number')
                    <span class="text-danger" role="alert">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="position-absolute end-0">
            <button type="button" class="btn btn-secondary">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
    </form>
</div>
