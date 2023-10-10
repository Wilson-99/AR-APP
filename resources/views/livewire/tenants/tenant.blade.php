<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    {{-- Pagetitle --}}
   <x-slot name="title">
    {{ __('Tenant') }}
    </x-slot>
    <button type="button" wire:navegate href="/createTenant" class="btn btn-outline-secondary my-2">
        Create +
    </button>
    <table id="tenantTable" class="table table-hover table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Domain</th>
                <th>Tenant</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($domains as $domain)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $domain->domain }}</td>
                    <td>{{ $domain->tenant_id }}</td>
                    <td><button class="btn btn-sm btn-outline-primary">view</button>
                    <button class="btn btn-sm btn-outline-warning">edit</button>
                    <button class="btn btn-sm btn-outline-danger">delete</button></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
