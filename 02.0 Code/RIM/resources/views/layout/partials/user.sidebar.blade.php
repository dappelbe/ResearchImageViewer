<li class="nav-item">
    <a class="nav-link"
       href="#"
       data-toggle="collapse"
       data-target="#collapseStudyTools"
       aria-expanded="true"
       aria-controls="collapseStudyTools">
        <i class="fas fa-fw fa-toolbox"></i>
        <span>Site Links</span>
    </a>
    <div id="collapseStudyTools" class="collapse show" aria-labelledby="headingStudyTools" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Dashboard</h6>
            <!--                <a class="collapse-item" href="">Consort Diagram</a> -->
            <a class="collapse-item" href="{{route('SiteController.Index')}}">Dashboard</a>
            <a class="collapse-item" href="{{route('SiteController.DocumentsForSite')}}">Site Documents</a>
        </div>
    </div>
</li>
