<!-- Ici je fais le modèle de ma navbar -->
 <navbar>
    <div class="bg-sky-200 w-full shadow-md h-[100px] flex items-center px-4 justify-between">
        <div class="flex items-center">
            <div class="h-full flex items-center p-5">
                <a href="/">
                    <img src="/images/hellocse.svg" alt="Logo HelloCSE" class="h-full">
                </a>
            </div>
            <div class="ml-[50px] font-bold sm:text-[16px] text-[0px] md:text-[20px]">
                Test technique HelloCSE - Julien Chazot
            </div>
        </div>

        <div class="text-center">
            @auth('web')
                <form action="{{ route('logout') }}" method="POST" class="flex flex-col items-center hover:text-gray-600">
                    @csrf 
                    <button type="submit" class="flex flex-col items-center">
                        <img src="/images/logout.png" alt="Déconnexion" class="w-10 h-10">
                        <span class="md:text-sm text-[10px] font-medium">Se déconnecter</span>
                    </button>
                </form>
            @else
                <a href="{{ route('login') }}" class="flex flex-col items-center hover:text-gray-600">
                    <img src="/images/login.png" alt="Connexion" class="w-10 h-10">
                    <span class="text-sm font-medium">Se connecter</span>
                </a>
            @endauth
        </div>
    </div>
</navbar>