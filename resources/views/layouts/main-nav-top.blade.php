<!-- NAV ================================================== -->
<nav class="main-top-nav navbar navbar-expand-lg navbar-light bg-light m-0 p-0" role="navigation">
    <div class="container">
        <a class="navbar-brand logo-nav" href="/">
            <img src="/images/Pottorff-Logo-Black.png" alt="{{config('app.name')}}">
        </a>

        <ul id="nav" class="nav navbar-nav float-right">
            <livewire:nav-item title="HOME" href="/" />

            <livewire:nav-dropdown
                title="PRODUCTS"
                :navItems="[
                    '/product?type=1' => [
                        'label' => 'Air Control and Backdraft Dampers',
                        'image' => url('images/menu/menu1.png'),
                    ],
                    '/product?type=2' => [
                        'label' => 'UL Rated Fire, Smoke and Ceiling Radiation Dampers',
                        'image' => url('images/menu/menu2.png'),
                    ],
                    '/product?type=3' => [
                        'label' => 'Louvers and Penthouses',
                        'image' => url('images/menu/menu3.png'),
                    ],
                    '/product?type=4' => [
                        'label' => 'Actuators and Accessories',
                        'image' => url('images/menu/menu4.png'),
                    ],
                 ]"
            />

            <livewire:nav-dropdown
                title="Quick Reference"
                :navItems="[
                    '#1' => ['label' => 'Louvers and Dampers', 'image' => url('images/menu/qmenu0.png')],
                    '#2' => ['label' => 'Louvers and Dampers Quick Reference', 'image' => url('images/menu/qmenu1.png')],
                 ]"
            />

            <livewire:nav-item title="SELECTION TOOLS" href="/selection-tools" />

            <livewire:nav-dropdown
                title="RESOURCES"
                :navItems="[
                    '/quick-ship' => ['label' => 'Quick Ship'],
                     '/literature' => ['label' => 'Literature'],
                     '/projects' => ['label' => 'Projects/ Cases Studies'],
                     '/training' => ['label' => 'Training'],
                     '#revit' => ['label' => 'Revit/CSI/Installation'],
                 ]"
            />

            <livewire:nav-dropdown
                title="ABOUT"
                :navItems="[
                    route('company.index') => ['label' => 'Company'],
                    route('repfinder.index') => ['label' => 'Repfinder'],
                    route('about.index') => ['label' => 'History'],
                    route('news.index') => ['label' => 'News'],
                    route('contact.index') => ['label' => 'Contact'],
                 ]"
            />

            <livewire:nav-item title="REP LOGIN" href="/rep-login" />
        </ul>
    </div>
</nav>
<!-- /nav end--->
