<div>
    <x-material-table>
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col"
                        class="table-th">
                        Movimiento
                    </th>
                    <th scope="col"
                        class="table-th">
                        Fecha
                    </th>
                    <th scope="col"
                        class="table-th">
                        Realizada por:
                    </th>
                    <th scope="col"
                        class="table-th">
                        Cantidad
                    </th>
               </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($material->material_movements as $movement)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">

                            <div class="text-sm text-gray-900">
                                {{ $movement->material_movements_type->name }}</div>
                            @if ($movement->material_movements_type_id == 2)
                                <div class="text-sm text-gray-500">{{ $movement->provider }}</div>
                                <div class="text-sm text-gray-500">{{ $movement->invoice }}</div>
                            @elseif($movement->material_movements_type_id == 5)
                                <div class="text-sm text-gray-500">
                                    {{ $movement->order->job->job_os() }}</div>
                            @elseif($movement->material_movements_type_id == 5)
                                <div class="text-sm text-gray-500">
                                    {{ $movement->order->job->job_os() }}</div>
                            @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">
                                {{ Carbon\Carbon::parse($movement->created_at)->format('d/m/Y') }}
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900"> {{ $movement->user->name }}</div>

                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            <div class="text-sm text-gray-500">{{ $movement->quantity }}
                                {{ $movement->material->material_type->dimensional->abrev }}</div>
                        </td>
                    </tr>
                @endforeach
                <!-- More people... -->
            </tbody>
        </table>
    </x-material-table>
</div>
