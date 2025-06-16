@extends('layouts.public')

@section('title', 'Accueil')

@section('content')
    <div class="relative flex size-full min-h-screen flex-col bg-slate-50 group/design-root overflow-x-hidden" style='font-family: Inter, "Noto Sans", sans-serif;'>
        <div class="layout-container flex h-full grow flex-col">
        <div class="px-40 flex flex-1 justify-center py-5">
            <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
            <div class="flex flex-wrap gap-2 p-4">
                <a class="text-[#486d9d] text-base font-medium leading-normal" href="#">Datasets</a>
                <span class="text-[#486d9d] text-base font-medium leading-normal">/</span>
                <span class="text-[#0d131c] text-base font-medium leading-normal">Health Facilities</span>
            </div>
            <div class="flex flex-wrap justify-between gap-3 p-4">
                <div class="flex min-w-72 flex-col gap-3">
                <p class="text-[#0d131c] tracking-light text-[32px] font-bold leading-tight">Health Facilities in Abidjan</p>
                <p class="text-[#486d9d] text-sm font-normal leading-normal">Source: Ministry of Health • Format: CSV • Last Updated: 2023-11-15</p>
                </div>
            </div>
            <div class="flex gap-3 p-3 flex-wrap pr-4">
                <div class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-[#e7ecf4] pl-4 pr-4">
                <p class="text-[#0d131c] text-sm font-medium leading-normal">Health</p>
                </div>
                <div class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-[#e7ecf4] pl-4 pr-4">
                <p class="text-[#0d131c] text-sm font-medium leading-normal">Abidjan</p>
                </div>
                <div class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-[#e7ecf4] pl-4 pr-4">
                <p class="text-[#0d131c] text-sm font-medium leading-normal">Facilities</p>
                </div>
            </div>
            <h2 class="text-[#0d131c] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Description</h2>
            <p class="text-[#0d131c] text-base font-normal leading-normal pb-3 pt-1 px-4">
                This dataset contains information about health facilities in Abidjan, including hospitals, clinics, and dispensaries. It provides details such as facility name,
                location, type of service, and contact information. The data is collected and maintained by the Ministry of Health to support public health planning and management.
                **Key Features:** * Facility Name * Location (coordinates and address) * Type of Service (hospital, clinic, etc.) * Contact Information (phone, email) * Operational
                Status (open, closed) **Data Usage:** This dataset can be used for various purposes, including: * Mapping and visualization of health facility distribution * Analysis
                of healthcare accessibility and coverage * Planning and resource allocation for public health services * Research on healthcare utilization and outcomes
            </p>
            <h2 class="text-[#0d131c] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Download Files</h2>
            <div class="px-4 py-3 @container">
                <div class="flex overflow-hidden rounded-lg border border-[#cedae9] bg-slate-50">
                <table class="flex-1">
                    <thead>
                    <tr class="bg-slate-50">
                        <th class="table-47c68f4f-2be3-4d5c-9f3c-3c7bf523a172-column-120 px-4 py-3 text-left text-[#0d131c] w-[400px] text-sm font-medium leading-normal">
                        Filename
                        </th>
                        <th class="table-47c68f4f-2be3-4d5c-9f3c-3c7bf523a172-column-240 px-4 py-3 text-left text-[#0d131c] w-[400px] text-sm font-medium leading-normal">Size</th>
                        <th class="table-47c68f4f-2be3-4d5c-9f3c-3c7bf523a172-column-360 px-4 py-3 text-left text-[#0d131c] w-60 text-sm font-medium leading-normal">Format</th>
                        <th class="table-47c68f4f-2be3-4d5c-9f3c-3c7bf523a172-column-480 px-4 py-3 text-left text-[#0d131c] w-60 text-[#486d9d] text-sm font-medium leading-normal">
                        Download
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="border-t border-t-[#cedae9]">
                        <td class="table-47c68f4f-2be3-4d5c-9f3c-3c7bf523a172-column-120 h-[72px] px-4 py-2 w-[400px] text-[#0d131c] text-sm font-normal leading-normal">
                        health_facilities_abidjan_2023.csv
                        </td>
                        <td class="table-47c68f4f-2be3-4d5c-9f3c-3c7bf523a172-column-240 h-[72px] px-4 py-2 w-[400px] text-[#486d9d] text-sm font-normal leading-normal">2.3 MB</td>
                        <td class="table-47c68f4f-2be3-4d5c-9f3c-3c7bf523a172-column-360 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                        <button
                            class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-4 bg-[#e7ecf4] text-[#0d131c] text-sm font-medium leading-normal w-full"
                        >
                            <span class="truncate">CSV</span>
                        </button>
                        </td>
                        <td class="table-47c68f4f-2be3-4d5c-9f3c-3c7bf523a172-column-480 h-[72px] px-4 py-2 w-60 text-[#486d9d] text-sm font-bold leading-normal tracking-[0.015em]">
                        Download
                        </td>
                    </tr>
                    <tr class="border-t border-t-[#cedae9]">
                        <td class="table-47c68f4f-2be3-4d5c-9f3c-3c7bf523a172-column-120 h-[72px] px-4 py-2 w-[400px] text-[#0d131c] text-sm font-normal leading-normal">
                        health_facilities_abidjan_metadata.xlsx
                        </td>
                        <td class="table-47c68f4f-2be3-4d5c-9f3c-3c7bf523a172-column-240 h-[72px] px-4 py-2 w-[400px] text-[#486d9d] text-sm font-normal leading-normal">150 KB</td>
                        <td class="table-47c68f4f-2be3-4d5c-9f3c-3c7bf523a172-column-360 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                        <button
                            class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-4 bg-[#e7ecf4] text-[#0d131c] text-sm font-medium leading-normal w-full"
                        >
                            <span class="truncate">XLSX</span>
                        </button>
                        </td>
                        <td class="table-47c68f4f-2be3-4d5c-9f3c-3c7bf523a172-column-480 h-[72px] px-4 py-2 w-60 text-[#486d9d] text-sm font-bold leading-normal tracking-[0.015em]">
                        Download
                        </td>
                    </tr>
                    </tbody>
                </table>
                </div>
                <style>
                            @container(max-width:120px){.table-47c68f4f-2be3-4d5c-9f3c-3c7bf523a172-column-120{display: none;}}
                @container(max-width:240px){.table-47c68f4f-2be3-4d5c-9f3c-3c7bf523a172-column-240{display: none;}}
                @container(max-width:360px){.table-47c68f4f-2be3-4d5c-9f3c-3c7bf523a172-column-360{display: none;}}
                @container(max-width:480px){.table-47c68f4f-2be3-4d5c-9f3c-3c7bf523a172-column-480{display: none;}}
                </style>
            </div>
            <h2 class="text-[#0d131c] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Related Datasets</h2>
            <div class="flex overflow-y-auto [-ms-scrollbar-style:none] [scrollbar-width:none] [&amp;::-webkit-scrollbar]:hidden">
                <div class="flex items-stretch p-4 gap-3">
                <div class="flex h-full flex-1 flex-col gap-4 rounded-lg min-w-40">
                    <div
                    class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-lg flex flex-col"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBeiOm8ClI98bbXfgMiwWwj87QpcFK1y4W7dbbx0RhQhslCRjJNZLoQRO_zjBRinRby6HG25WOZKoNl1sqTTQDrNQHrPoADSKNCoDK4yhbQ_4mPU9Bmm2IhwqUvMjgvB3PZ1pxS71mEnYcpEgLHlrgShMiRnny5QsU_8MpalpZwHLSEu-aru-B98tiO7WRxiRMgcbnoYf0qV37YuvtyowOg3hiLtP8gZelliQfcaYEv9FIL0hSQ55efXS3kA4RtfhzzOOdvIYfdYOeR");'
                    ></div>
                    <div>
                    <p class="text-[#0d131c] text-base font-medium leading-normal">Healthcare Workforce in Abidjan</p>
                    <p class="text-[#486d9d] text-sm font-normal leading-normal">Data on healthcare professionals in Abidjan.</p>
                    </div>
                </div>
                <div class="flex h-full flex-1 flex-col gap-4 rounded-lg min-w-40">
                    <div
                    class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-lg flex flex-col"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuB97hcZz1sK3pNtS6H0J4kcwRiiMn1Nf_QAwGEpRMS_hirJKMwULfc9AIhSCZn4nAwiH4f1PdebI_X7xX-A-eHI6MbuKE7DvLwPza6hij7RfheY7uJd8nHAaFpkQsVFo3QEF7L_uzHV54T_k2lDDR_Xcnl0gkzcxB0sD9xPwxIMTDifT_dt9h8przvdZjzm-N5T7YjxQB8md3nizUNt0VL766ZLvYKlimKK1eOU8RGe6uFvj4nk8kWazcMXi3MPo2JrBEGDnqmKSrXF");'
                    ></div>
                    <div>
                    <p class="text-[#0d131c] text-base font-medium leading-normal">Disease Surveillance Data</p>
                    <p class="text-[#486d9d] text-sm font-normal leading-normal">Real-time tracking of disease outbreaks.</p>
                    </div>
                </div>
                <div class="flex h-full flex-1 flex-col gap-4 rounded-lg min-w-40">
                    <div
                    class="w-full bg-center bg-no-repeat aspect-square bg-cover rounded-lg flex flex-col"
                    style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuB5MpK9SXuepfst1ltHw49gDJRKKmjPZxn4oP5Cy8zf0K_bXcQfcaa0lQCWTHj8SDUzHnxeaAJBca1dwGJvye1W3qS7Hn-tkFZF-r8kRKXK7Uocfdm2h8-TaZ5S6jITYV0cmQswvY_kMF5zE98APpd5iyqUvp1ND9fQtpZCTHCXf183at-J7rlPm0YzspY6ojSaFEgMLf4MrNAK1VqBpJJNxFrzr1iX5TC3UKAOOvfx5HIilKEI8fyhQgVTIeGBBtN-eQbJjxgKPhgR");'
                    ></div>
                    <div>
                    <p class="text-[#0d131c] text-base font-medium leading-normal">Public Health Indicators</p>
                    <p class="text-[#486d9d] text-sm font-normal leading-normal">Key health metrics for the region.</p>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
@endsection
