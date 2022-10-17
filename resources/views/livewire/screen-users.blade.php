<div>
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tables</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>email_verified_at</th>
                                <th>password</th>
                                <th>remember_token</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>email_verified_at</th>
                                <th>password</th>
                                <th>remember_token</th>
                                <th></th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ( $user as $value )
                                <tr>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $value->email }}</td>
                                    <td>{{ $value->email_verified_at }}</td>
                                    <td>{{ $value->password }}</td>
                                    <td>{{ $value->remember_token }}</td>
                                    <td>
                                        <i wire:click="getOneUser({{ $value->id }})" data-toggle="modal" data-target="#editModal" id="edit" style="cursor: pointer;" class="fas fa-fw fa-user"></i>
                                        <i data-toggle="modal" data-target="#deleteModal" id="delete" style="cursor: pointer;" class="fas fa-fw fa-trash"></i>
                                    </td>
                                <tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $user->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modal-->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form wire:submit.prevent="submit">
                <div class="modal-body">
                    <div class="mb-3 mt-4">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" wire:model="name">
                        @error('name') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3 mt-4">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control" wire:model="email">
                        @error('email') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" wire:model="password">
                        @error('password') <span class="error">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-link" type="button" data-dismiss="modal">{{ __('Cancel') }}</button>
                    <button class="btn btn-link" type="submit" data-dismiss="modal">{{ __('Submit') }}</button>
                </div>
            </form> 
        </div>
    </div>
</div>

<!-- Delete Modal-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ __('Ready to Leave?') }}</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Do you want to delete this user?</div>
            <div class="modal-footer">
                <button class="btn btn-link" type="button" data-dismiss="modal">{{ __('Cancel') }}</button>
                <a class="btn btn-danger" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
            </div>
        </div>
    </div>
</div>
