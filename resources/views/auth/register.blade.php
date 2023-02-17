@extends('layouts.app')

@section('content')
<section class="bg-gray-50 dark:bg-gray-900">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
            <img class=" h-13 mr-2 logo-login " src="{{ asset('./Icons/E-Tax-icon.svg') }}" alt="logo">
        </a>
        <div
            class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-300  text-center md:text-2xl dark:text-white">
                    Portail d'inscription
                </h1>
                <form class="space-y-4 md:space-y-6" action="{{route('register')}}" method="POST">
                    @csrf

                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom</label>
                        <input type="name" name="name" id="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500  @error('name') is-invalid @enderror"
                            placeholder="nom complet" required="">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Adresse
                            E-mail</label>
                        <input type="email" name="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500  @error('email') bg-red-300 @enderror"
                            placeholder="name@company.com" required="">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>


                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mot
                            de passe</label>
                        <input type="password" name="password" id="password" placeholder="••••••••••••••••"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500  @error('password') bg-red-300 @enderror"
                            required="">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>


                    <div>
                        <label for="password-confirm" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Mot
                            de passe</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="••••••••••••••••"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-lime-600 focus:border-lime-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="password_confirmation" required autocomplete="new-password @error('password_confirmation') is-invalid @enderror" required="">
                        @error('password_confirmation')
                        <span class="bg-red-300" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
 
                    <button type="submit"
                        class="w-full text-white bg-lime-500 hover:bg-lime-700 focus:ring-4 focus:outline-none focus:ring-lime-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-lime-600 dark:hover:bg-lime-700 dark:focus:ring-lime-800"> S'isncrire'</button>
                    <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                       vous avez déjà un compte ? <a href="#"
                            class="font-medium text-lime-600 hover:underline dark:text-lime-500">Se connecter</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection