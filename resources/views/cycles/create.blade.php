<x-app-layout>

<head>
    <!-- Other meta tags and stylesheets -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>


<div class="container mx-auto px-6 py-2">
    <div class="text-right">
    <a href="{{ route('cycles.new') }}" class="bg-blue-500 text-white font-bold px-5 py-1 rounded focus:outline-none shadow hover:bg-blue-500 transition-colors">New Cycle</a>

    </div>
</div>


<div class="container mx-auto px-6 py-2">

<div class="bg-white shadow-md rounded my-6">
    <table class="text-left w-full border-collapse">
        <thead>
            <tr>
                <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Formation</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">Thème</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light">num d'action</th>
                <th class="py-4 px-6 bg-grey-lightest font-bold text-sm text-grey-dark border-b border-grey-light text-right">Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($cycles as $cycle)
    <tr class="hover:bg-grey-lighter">
        <td class="py-4 px-6 border-b border-grey-light">{{ $cycle->nom_entreprise }}</td>
        <td class="py-4 px-6 border-b border-grey-light">{{ $cycle->theme_formation }}</td>
        <td class="py-4 px-6 border-b border-grey-light">{{ $cycle->num_action }}</td>

        
        <td class="py-4 px-6 border-b border-grey-light text-right">
                                                   
          <a href="{{ route('admin.edit-cycle', $cycle->id) }}" class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-green hover:bg-green-dark text-blue-400">Edit</a>

                                                
          <form action="{{ route('cycles.destroy', $cycle->id) }}" method="POST" class="inline">
    @csrf
    @method('DELETE')
    <button class="text-grey-lighter font-bold py-1 px-3 rounded text-xs bg-blue hover:bg-blue-dark text-red-400">Delete</button>
</form>


    </tr>
@endforeach

        </tbody>
    </table>
</div>


</div>








</x-app-layout>

<style>
    .input-field {
    /* Add your shared CSS styling for form input fields here */
    /* For example: */
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    outline: none;

    }
    </style>