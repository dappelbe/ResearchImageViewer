<li class="nav-item">
    <a class="nav-link" href="{{route('Dashboard.Index')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Study Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<li class="nav-item">
    <a class="nav-link"
       href="#"
       data-toggle="collapse"
       data-target="#collapseStudyTools"
       aria-expanded="true"
       aria-controls="collapseStudyTools">
        <i class="fas fa-fw fa-toolbox"></i>
        <span>Study Details</span>
    </a>
    <div id="collapseStudyTools" class="collapse show" aria-labelledby="headingStudyTools" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Dashboard</h6>
            <!--                <a class="collapse-item" href="">Consort Diagram</a> -->
            <a class="collapse-item" href="{{route('Dashboard.Index')}}">Dashboard</a>
            <a class="collapse-item" href="{{route('DelegationLog.Index')}}">Delegation Log</a>
            <a class="collapse-item" href="{{route('ContactLog.Index')}}">Contact Log</a>
            <!--                <a class="collapse-item" href="">Participant Status</a> -->
            <!--                <a class="collapse-item" href="">Participants to Chase</a> -->
            <a class="collapse-item" href="{{route('TaskProcessing.Index')}}">Processing Log</a>
            <!--                <a class="collapse-item" href="">Protocol Deviations</a> -->
            <!--                <a class="collapse-item" href="">Recruitment</a> -->
            <a class="collapse-item" href="{{route('RevisionHistory.Index')}}">Revision History</a>
            <!--                <a class="collapse-item" href="">Screening Log</a> -->
            <a class="collapse-item" href="{{route('SeriousAdverseEvents.Index')}}">Serious Adverse Events</a>
            <!--                <a class="collapse-item" href="">Site Status</a> -->
            <!--                <a class="collapse-item" href="">Trial Management Report</a> -->
            <a class="collapse-item" href="{{route('ActivityHistory.Index')}}">User Activity Log</a>
        </div>
    </div>
</li>


<li class="nav-item">
    <a class="nav-link"
       href="#"
       data-toggle="collapse"
       data-target="#collapseTools"
       aria-expanded="true"
       aria-controls="collapseTools">
        <i class="fas fa-fw fa-toolbox"></i>
        <span>Configuration</span>
    </a>
    <div id="collapseTools" class="collapse" aria-labelledby="headingTools" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Configuration:</h6>
            <a class="collapse-item" href="{{route('AlertsConfiguration.Index')}}">Alerts Config</a>
            <a class="collapse-item" href="{{route('Configuration.Index')}}">Application Config</a>
            <a class="collapse-item" href="{{route('StudyConfig.Index')}}">Study Config</a>
            <a class="collapse-item" href="/users">User Management</a>
            <a class="collapse-item" href="/roles">Roles Management</a>
            <a class="collapse-item" href="{{route('SiteAdministration.Index')}}">Site Management</a>
        </div>
    </div>
</li>
