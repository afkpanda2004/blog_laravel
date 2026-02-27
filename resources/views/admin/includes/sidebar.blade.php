<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Кнопка-бургер -->
    <button class="btn btn-link order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!">
        <i class="fas fa-bars"></i>
    </button>
</nav>

<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class=" pt-3 sb-sidenav-menu">
                <div class="nav">
                    <!-- Твои ссылки теперь будут с правильными отступами -->
                    <a class="nav-link" href="{{route('admin.post.index')}}">
                        <!-- Добавляем fa-lg для увеличения и ms-2 для отступа от края -->
                        <div class="sb-nav-link-icon text-center">
                            <i class="fa-brands fa-buffer fa-fw"></i>
                        </div>
                        <span class="ms-1">Посты</span>
                    </a>

                    <a class="nav-link" href="{{route('admin.category.index')}}">
                        <!-- Добавляем fa-lg для увеличения и ms-2 для отступа от края -->
                        <div class="sb-nav-link-icon text-center">
                            <i class="fas fa-table fa-fw"></i>
                        </div>
                        <span class="ms-1">Категории</span>
                    </a>

                    <a class="nav-link" href="{{route('admin.tag.index')}}">
                        <!-- Добавляем fa-lg для увеличения и ms-2 для отступа от края -->
                        <div class="sb-nav-link-icon text-center">
                            <i class="fa-solid fa-tag fa-fw"></i>
                        </div>
                        <span class="ms-1">Тэги</span>
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <!-- ВАЖНО: здесь мы НЕ закрываем layoutSidenav, это сделает главный файл -->
    <div id="layoutSidenav_content">
