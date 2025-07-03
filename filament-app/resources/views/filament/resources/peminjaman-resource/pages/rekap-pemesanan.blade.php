<x-filament::page>
    <h2 class="text-lg font-bold mb-4">Rekapan Pemesanan</h2>
    <table class="table-auto w-full text-left">
        <thead>
            <tr>
                <th class="border px-4 py-2">Tanggal</th>
                <th class="border px-4 py-2">Ruangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rekapan as $item)
                <tr>
                    <td class="border px-4 py-2">{{ $item->tanggal_pinjam }}</td>
                    <td class="border px-4 py-2">{{ $item->ruangan->nama ?? '-' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-filament::page>
