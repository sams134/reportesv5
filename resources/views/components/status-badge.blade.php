@props(['job'])
<div>
    @if ($job->status_id == 1) {{-- Sin Asignar --}}
            <span class="bg-red-200 text-red-700 py-2 px-3 rounded-full text-xs shadow-sm">Sin Asignar</span>
        @elseif($job->status_id == 2) {{-- Sin Asignar --}}
            <span
                class="bg-yellow-200 text-yellow-700 py-2 px-3 rounded-full text-xs shadow-sm">Espera/Diagnostico</span>
        @elseif($job->status_id == 3) {{-- Sin Asignar --}}
            <span class="bg-green-200 text-green-700 py-2 px-3 rounded-full text-xs shadow-sm">Trabajando</span>
        @elseif($job->status_id == 4) {{-- Sin Asignar --}}
            <span class=" bg-purple-200 text-purple-700 py-2 px-3 rounded-full text-xs shadow-sm">Finalizado</span>
        @elseif($job->status_id == 5) {{-- Sin Asignar --}}
            <span class=" bg-blue-200 text-blue-700 py-2 px-3 rounded-full text-xs shadow-sm">EPF</span>
        @elseif($job->status_id == 6) {{-- Sin Asignar --}}
            <span class=" bg-pink-200 text-pink-700 py-2 px-3 rounded-full text-xs shadow-sm">Facturado</span>
        @elseif($job->status_id == 7) {{-- Sin Asignar --}}
            <span class=" bg-indigo-200 text-indigo-700 py-2 px-3 rounded-full text-xs shadow-sm">Pagado</span>
        @endif
</div>