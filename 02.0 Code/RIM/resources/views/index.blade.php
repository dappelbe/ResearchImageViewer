@extends('layout.mainlayout')
@section('content')
<div class="album text-muted">

    <div class="row">
        <div class="col-12">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body bg-white">
                    <ul>
                        <li>
                            <ul>
                                <li>Recruitment Summary</li>
                                <li>Screening Log</li>
                                <li>Delegation Log</li>
                                <li>Site documentation</li>
                                <li>Site training documentation</li>
                            </ul>
                            The application also prompts for data management tasks
                        </li>
                        <li>
                            Details of the software and its validation status can be obtained on this page.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            &nbsp;
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-header bg-gradient-warning">
                    <h4 class="m-0 font-weight-bold text-white"><i class="fas fa-fw fa-box-open"></i> Framework</h4>
                </div>
                <div class="card-body bg-white">
                    <ul>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-header bg-gradient-info">
                    <h4 class="m-0 font-weight-bold text-white"><i class="fas fa-fw fa-copy"></i> Documentation</h4>
                </div>
                <div class="card-body bg-white">
                    <ul>
                        <li>
                        </li>
                        <li>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header bg-gradient-success">
                    <h4 class="m-0 font-weight-bold text-white"><i class="fas fa-fw fa-history"></i> Revision History</h4>
                </div>
                <div class="card-body bg-white">
                    <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>
                                Date
                            </th>
                            <th>
                                Version
                            </th>
                            <th>
                                Author
                            </th>
                            <th>
                                Details
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                01Aug2019
                            </td>
                            <td>
                                0.0.1
                            </td>
                            <td>
                                Duncan Appelbe
                            </td>
                            <td>
                                Initial release
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


</div>
@endsection

@section('pagejs')
<script language="JavaScript">
    $(document).ready(function() {
        $('#table').DataTable();
    });
</script>
@endsection
