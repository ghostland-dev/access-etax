@extends('layouts.app')

@section('content')
<section class="bg-gray-50 dark:bg-gray-900">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <a href="#" class="flex items-center mb-6 text-3xl font-semibold text-gray-900 dark:text-white">
            <img class=" h-13 mr-2 logo-login " src="{{ asset('./Icons/E-Tax-icon.svg') }}" alt="logo">
            
        </a>
        <div
            class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-300 md:text-2xl  text-center  dark:text-white">
                    Portail de connexion
                </h1>
                <form class="space-y-4 md:space-y-6" action="{{route('login')}}" method="POST">

                    @csrf
                    
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Adresse
                            E-mail</label>
                        <input type="email" name="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500  @error('email') is-invalid @enderror"
                            placeholder="nom@exemple.fr" required="">
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
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500  @error('password') is-invalid @enderror"
                            required="">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="remember" aria-describedby="remember" type="checkbox"
                                    class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800"
                                    required="" {{ old('remember') ? 'checked' : '' }}>
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="remember" class="text-gray-500 dark:text-gray-300">Garder la session vivante.</label>
                            </div>
                        </div>



                            @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}"
                                class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500"> Mot de passe oublié ?</a>
                            @endif

                    </div>
                    <button type="submit"
                        class="w-full text-white bg-lime-400 hover:bg-lime-300 focus:ring-4 focus:outline-none focus:ring-lime-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-lime-600 dark:hover:bg-lime-700 dark:focus:ring-lime-800">se conencter</button>
                    <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                        vous n'avez pas encore un compte ? <a href="#"
                            class="font-medium text-primary-600 hover:underline dark:text-primary-500">S'isncrire </a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection