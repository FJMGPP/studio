<x-app-layout>

<div class="flex flex-row justify-between px-8">

    <a class="flex btn btn-secondary btn-sm" href="{{ route('works.create') }}">
        New work
    </a>

    <h1>List of works</h1>

<!-- component 
<div class="justify-center my-8 select-none flex">
    <button class="py-2 px-4 shadow-md no-underline rounded-full bg-blue text-white font-sans font-semibold text-sm border-blue btn-primary hover:text-white hover:bg-blue-light focus:outline-none active:shadow-none mr-2">Primary</button>
    <button class="py-2 px-4 shadow-md no-underline rounded-full bg-orange text-white font-sans font-semibold text-sm border-orange btn-primary hover:text-white hover:bg-orange-light focus:outline-none active:shadow-none mr-2">Alert</button>
    <button class="py-2 px-4 shadow-md no-underline rounded-full bg-red text-white font-sans font-semibold text-sm border-red btn-primary hover:text-white hover:bg-red-light focus:outline-none active:shadow-none">Danger</button>	
  </div>

</div>-->

<!-- component -->
<table class="min-w-full border-collapse block md:table">

    <thead class="block md:table-header-group">
        <tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Title</th>
            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Description</th>
            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Details</th>
            <th class="bg-gray-600 p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Actions</th>
        </tr>
    </thead>

    <tbody class="block md:table-row-group">

        @foreach ($works as $work)

        <tr class="bg-gray-300 border border-grey-500 md:border-none block md:table-row">

            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Title</span>{{$work->title}}</td>
            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Description</span>{{$work->description}}</td>
            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Details</span>{{$work->detail}}</td>
            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                <span class="inline-block w-1/3 md:hidden font-bold">Actions</span>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded">Edit</button>
                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded">Delete</button>
            </td>

        </tr>

        @endforeach

    </tbody>

</table>


</x-app-layout>

