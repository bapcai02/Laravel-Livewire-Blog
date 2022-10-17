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
                                        <i id="edit" style="cursor: pointer;" class="fas fa-fw fa-user"></i>
                                        <i id="delete" style="cursor: pointer;" class="fas fa-fw fa-trash"></i>
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
