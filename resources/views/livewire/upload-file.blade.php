<div>
    <form wire:submit.prevent="uploadFile" method="POST">
        <div class="row justify-content-center">
            <div class="mb-3 col-md-8">
                @if ($success)
                <span class="text-success">{{ $message }}</span><br>
                @endif
                <label for="formFileLg" class="form-label">(required types are: xls, csv)</label>
                <input wire:model="file_to_upload" type="file"
                    class="form-control form-control-lg @error('file_to_upload') is-invalid @enderror">
                @error('file_to_upload')
                    <span class="text-danger" role="alert">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <p wire:loading wire:target="uploadFile">
            Uploading file...
        </p>
        <div>
            <button type="submit" class="btn btn-lg btn-info text-light"
                wire:loading.disabled>Upload and Update</button>
        </div>
    </form>

    <!-- Modal -->
    <div class="modal fade" id="addSingle" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Single Patient</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form>
                    <div class="modal-body row text-left">
                        <div class="mb-3 col-md-6">
                            <label for="">HIV Art No.</label>
                            <input type="text" placeholder=""
                                class="form-control @error('hiv_art_no') is-invalid @enderror">
                            @error('hiv_art_no')
                                <span class="text-danger" role="alert">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="">Family Name</label>
                            <input type="text" placeholder=""
                                class="form-control @error('first_name') is-invalid @enderror">
                            @error('first_name')
                                <span class="text-danger" role="alert">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="">Given Name</label>
                            <input type="text" placeholder=""
                                class="form-control @error('given_name') is-invalid @enderror">
                            @error('given_name')
                                <span class="text-danger" role="alert">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="">Select Gender</label>
                            <select name="" id="" class="form-control">
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
                            <input type="date" placeholder=""
                                class="form-control @error('hiv_viral_load_date') is-invalid @enderror">
                            @error('hiv_viral_load_date')
                                <span class="text-danger" role="alert">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="">Return Visit Date</label>
                            <input type="date" placeholder=""
                                class="form-control @error('return_visit_date') is-invalid @enderror">
                            @error('return_visit_date')
                                <span class="text-danger" role="alert">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="">Phone Number</label>
                            <input type="text" placeholder=""
                                class="form-control @error('phone_number') is-invalid @enderror">
                            @error('phone_number')
                                <span class="text-danger" role="alert">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="">Care Giver Phone Number</label>
                            <input type="text" placeholder=""
                                class="form-control @error('care_giver_phone_number') is-invalid @enderror">
                            @error('care_giver_phone_number')
                                <span class="text-danger" role="alert">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
