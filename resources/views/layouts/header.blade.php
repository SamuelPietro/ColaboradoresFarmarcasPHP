<div class="navbar">
    <div class="flex">
        <div class="logo">
            <a href="{{ route('index') }}" title="Farmarca">
                <img class="max-h-12" src="{{ asset('images/logomarca.png') }}"
                     alt="Farmarca">
            </a>
        </div>
    </div>
    <div class="flex">
        <div id="nav-button" class="hover:text-orange-500 text-white text-4xl">
            <i class="bi bi-list"></i>
        </div>
    </div>
</div>
<aside>
    <div id="nav" class="nav">
        <form class="search relative" action="{{ route('search_colaborador') }}" method="GET">
            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                <i class="bi bi-search"></i>
            </div>
            <input type="search" id="default-search" name="search"
                   class="pl-10 py-4" placeholder="Buscar..." required>
        </form>
        <a href="{{ route('list_colaboradores') }}" title="Colaboradores">
            <div class="menu">
                <div class="icon-menu">
                    <i class="bi bi-person-fill"></i>
                </div>
                <div class="text-menu">Colaboradores</div>
            </div>
        </a>

        <hr class="mt-2">
    </div>
</aside>

