@extends('layouts.app')

@section('content')

<section class="text-gray-600 body-font overflow-hidden">
    <div class="container px-5 py-24 mx-auto">
      <div class="lg:w-4/5 mx-auto flex flex-wrap">
        <div class="lg:w-1/2 w-full lg:pr-10 lg:py-6 mb-6 lg:mb-0">
          <h1 class="text-gray-900 text-3xl title-font font-medium mb-4">{{ $Utilisateur->name }}</h1>
          <div class="flex mb-4">
            <a class="flex-grow text-indigo-500 border-b-2 border-indigo-500 py-2 text-lg px-1">Description</a>
          </div>
          <p class="leading-relaxed mb-4"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus exercitationem odit quia incidunt ipsum eaque cum, provident adipisci, amet ab beatae? Iusto asperiores natus repellendus officia vitae. Est, nihil reiciendis.</p>

         <div class="flex border-t border-gray-200 py-2">
            <span class="text-gray-500">Identifiante</span>
            <span class="ml-auto text-gray-900">{{ $Utilisateur->id }}</span>
          </div>

          <div class="flex border-t border-gray-200 py-2">
            <span class="text-gray-500">Nom complet</span>
            <span class="ml-auto text-gray-900">{{ $Utilisateur->name }}</span>
          </div>
          <div class="flex border-t border-gray-200 py-2">
            <span class="text-gray-500">Email</span>
            <span class="ml-auto text-gray-900">{{ $Utilisateur->email }}</span>
          </div>
          <div class="flex border-t border-gray-200 py-2">
            <span class="text-gray-500">Compte</span>
            <span class="ml-auto text-gray-900">{{ $Utilisateur->verified_emtail?'verifié':'non verifié' }}</span>
          </div>
          <div class="flex border-t border-b mb-6 border-gray-200 py-2">
            <span class="text-gray-500">Date inscription </span>
            <span class="ml-auto text-gray-900">{{ $Utilisateur->created_at }}</span>
          </div>
          <div class="flex">
            <span class="title-font font-medium text-2xl text-gray-900">Identifiant Client : 1000{{ $Utilisateur->id }}</span>
            <button class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Précedent</button>
          </div>
        </div>
        <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="https://dummyimage.com/400x400">
      </div>
    </div>
  </section>
@endsection
