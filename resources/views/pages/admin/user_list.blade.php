@extends('layouts.admin_app');

@section('sidebar_list')
    <ul class="vertical-nav-menu">
        <li class="app-sidebar__heading"><a href = "properties_list">Dashboard</a></li>
        <li class="app-sidebar__heading"><a href = "create">Companies</a></li>
        <li class="app-sidebar__heading active"><a href = "user_list">Users</a></li>
    </ul>
@endsection

@section('content')
<div id="users">
    <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="userList">
        <thead>
            <tr>
                <th>ID</th>
                <th>Company name</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Active</th>
                <th>Creation date</th>
                <th>Modification date</th>
                <th>Verified</th>
                <th>Access done</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
<div>
@endsection

@section('custom_js')
<script language="javascript" type="text/javascript">
    $(document).ready(function() {
        var initTable = function() {
            var table = $('#userList');
            table.DataTable({
                responsive: true,
                searchDelay: 500,
                processing: true,
                serverSide: true,
                ordering: true,
                ajax: {
                    url: '/admin/user_list',
                    type: 'POST',
                    data : {
                        _token : $('meta[name="csrf-token"]').attr('content')
                    }
                },
                columns: [
                    { 
                        data: 'id', 
                        orderable: true,
                    },
                    { 
                        data: null, 
                        render: function(data, type, row) { 
                            if(row.company) {
                                return row.company.name;
                            }   else {
                                return 'No company';
                            }                    
                        },
                        orderable: false,
                    },
                    { 
                        data: 'name',
                        orderable: false,
                    },
                    { 
                        data: 'surname',
                        orderable: false,
                    },
                    { 
                        data: 'active',
                        render: function(data, type, row) { 
                            if(row.active == 1) {
                                return 'Yup';
                            }   else {
                                return 'No';
                            }                    
                        },
                        orderable: false,
                    },
                    {
                        data: 'created',
                        orderable: false,
                    },
                    { 
                        data: 'modified',
                        orderable: false,
                    },
                    { 
                        data: null,
                        render: function(data, type, row) { 
                            if(row.verified == 1) {
                                return 'Yup';
                            }   else {
                                return 'No';
                            }                    
                        },
                        orderable: false,
                    },
                    {
                        data: null,
                        render: function(data, type, row) { 
                            if(row.access_done == 1) {
                                return 'Yup';
                            }   else {
                                return 'No';
                            }                    
                        },
                        orderable: false,
                    },
                ],
                language: {
                    "decimal":        "",
                    "emptyTable":     "No data available in table",
                    "info":           "Showing _START_ to _END_ of _TOTAL_ entries",
                    "infoEmpty":      "Showing 0 to 0 of 0 entries",
                    "infoFiltered":   "(filtered from _MAX_ total entries)",
                    "infoPostFix":    "",
                    "thousands":      ",",
                    "lengthMenu":     "Show _MENU_ entries",
                    "loadingRecords": "Loading...",
                    "processing":     "Processing...",
                    "search":         "Search:",
                    "zeroRecords":    "No matching records found",
                    "paginate": {
                        "first":      "First",
                        "last":       "Last",
                        "next":       "Next",
                        "previous":   "Previous"
                    },
                    "aria": {
                        "sortAscending":  ": activate to sort column ascending",
                        "sortDescending": ": activate to sort column descending"
                    }
                }
            });
        };

        initTable();
    } );
</script>
@endsection