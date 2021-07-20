<!-- NAV ================================================== -->
<style>

    /*@media only screen and (max-width: 768px) {*/
        .logo-black{
            padding-bottom: 10px!important;
        }
    /*}*/
</style>
<nav class="main-top-nav navbar navbar-expand-lg navbar-light bg-light m-0 p-0" role="navigation">
    <div class="container container-lg container-fix-menu">
        <a class="navbar-brand logo-nav" href="/">
            <img src="/images/Pottorff-Logo-Black.png" style="width: 250px;" class="logo-black" alt="{{config('app.name')}}">
        </a>

        <ul id="nav" class="nav navbar-nav">
            <livewire:nav-item title="Home" href="/" />

            <livewire:product-category-nav />

            <livewire:nav-item title="Quick Reference" href="/selection-tools" />

            <livewire:nav-dropdown
                title="Selection Tools"
                :navItems="[
                    'https://www.pottorff.com/list/' => ['label' => 'LIST Louver Selection Tool'],
                    'http://apps.pottorff.com/CrossRef/' => ['label' => 'Louver and Damper Cross Reference'],
                ]"
            />

            <livewire:nav-dropdown
                title="RESOURCES"
                :navItems="[
                    '/quick-ship' => ['label' => 'Quick Ship'],
                     '/literature' => ['label' => 'Literature'],
                     '/projects' => ['label' => 'Projects/Case Studies'],
                     '/training' => ['label' => 'Training'],
                     '#revit' => ['label' => 'Revit/CSI/Installation'],
                 ]"
            />

            <livewire:nav-dropdown
                title="ABOUT"
                :navItems="[
                    route('company.index') => ['label' => 'Company'],
                    route('about.index') => ['label' => 'History'],
                    route('news.index') => ['label' => 'News'],
                    route('contact.index') => ['label' => 'Contact'],
                 ]"
            />

            <livewire:nav-item title="Rep finder" href="/repfinder" />
            <livewire:nav-item title="Rep Login" href="/repfinder" class="d-md-none" />
        </ul>
    </div>
</nav>
<!-- /nav end--->
