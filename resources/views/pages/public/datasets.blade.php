@extends('layouts.public')

@section('title', 'Accueil')

@section('content')
 <div class="relative flex size-full min-h-screen flex-col bg-white group/design-root overflow-x-hidden" style="--checkbox-tick-svg: url('data:image/svg+xml,%3csvg viewBox=%270 0 16 16%27 fill=%27rgb(255,255,255)%27 xmlns=%27http://www.w3.org/2000/svg%27%3e%3cpath d=%27M12.207 4.793a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0l-2-2a1 1 0 011.414-1.414L6.5 9.086l4.293-4.293a1 1 0 011.414 0z%27/%3e%3c/svg%3e'); --radio-dot-svg: url('data:image/svg+xml,%3csvg viewBox=%270 0 16 16%27 fill=%27rgb(17,20,24)%27 xmlns=%27http://www.w3.org/2000/svg%27%3e%3ccircle cx=%278%27 cy=%278%27 r=%273%27/%3e%3c/svg%3e'); --select-button-svg: url('data:image/svg+xml,%3csvg xmlns=%27http://www.w3.org/2000/svg%27 width=%2724px%27 height=%2724px%27 fill=%27rgb(96,114,138)%27 viewBox=%270 0 256 256%27%3e%3cpath d=%27M181.66,170.34a8,8,0,0,1,0,11.32l-48,48a8,8,0,0,1-11.32,0l-48-48a8,8,0,0,1,11.32-11.32L128,212.69l42.34-42.35A8,8,0,0,1,181.66,170.34Zm-96-84.68L128,43.31l42.34,42.35a8,8,0,0,0,11.32-11.32l-48-48a8,8,0,0,0-11.32,0l-48,48A8,8,0,0,0,85.66,85.66Z%27%3e%3c/path%3e%3c/svg%3e'); font-family: Inter, &quot;Noto Sans&quot;, sans-serif;">
      <div class="layout-container flex h-full grow flex-col">
        <div class="gap-1 px-6 flex flex-1 justify-center py-5">
          <div class="layout-content-container flex flex-col w-80">
            <div class="px-4 py-3">
              <label class="flex flex-col min-w-40 h-12 w-full">
                <div class="flex w-full flex-1 items-stretch rounded-lg h-full">
                  <div
                    class="text-[#60728a] flex border-none bg-[#f0f2f5] items-center justify-center pl-4 rounded-l-lg border-r-0"
                    data-icon="MagnifyingGlass"
                    data-size="24px"
                    data-weight="regular"
                  >
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"
                      ></path>
                    </svg>
                  </div>
                  <input
                    placeholder="Search datasets..."
                    class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#111418] focus:outline-0 focus:ring-0 border-none bg-[#f0f2f5] focus:border-none h-full placeholder:text-[#60728a] px-4 rounded-l-none border-l-0 pl-2 text-base font-normal leading-normal"
                    value=""
                  />
                </div>
              </label>
            </div>
            <p class="text-[#60728a] text-sm font-normal leading-normal pb-3 pt-1 px-4">134 datasets found</p>
            <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
              <label class="flex flex-col min-w-40 flex-1">
                <select
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#111418] focus:outline-0 focus:ring-0 border border-[#dbe0e6] bg-white focus:border-[#dbe0e6] h-14 bg-[image:--select-button-svg] placeholder:text-[#60728a] p-[15px] text-base font-normal leading-normal"
                >
                  <option value="one">Sort by</option>
                  <option value="two">two</option>
                  <option value="three">three</option>
                </select>
              </label>
            </div>
            <h3 class="text-[#111418] text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Filters</h3>
            <h4 class="text-[#60728a] text-sm font-bold leading-normal tracking-[0.015em] px-4 py-2 text-center">Format</h4>
            <div class="px-4">
              <label class="flex gap-x-3 py-3 flex-row">
                <input
                  type="checkbox"
                  class="h-5 w-5 rounded border-[#dbe0e6] border-2 bg-transparent text-[#1d78f0] checked:bg-[#1d78f0] checked:border-[#1d78f0] checked:bg-[image:--checkbox-tick-svg] focus:ring-0 focus:ring-offset-0 focus:border-[#dbe0e6] focus:outline-none"
                />
                <p class="text-[#111418] text-base font-normal leading-normal">CSV</p>
              </label>
              <label class="flex gap-x-3 py-3 flex-row">
                <input
                  type="checkbox"
                  class="h-5 w-5 rounded border-[#dbe0e6] border-2 bg-transparent text-[#1d78f0] checked:bg-[#1d78f0] checked:border-[#1d78f0] checked:bg-[image:--checkbox-tick-svg] focus:ring-0 focus:ring-offset-0 focus:border-[#dbe0e6] focus:outline-none"
                />
                <p class="text-[#111418] text-base font-normal leading-normal">XLSX</p>
              </label>
              <label class="flex gap-x-3 py-3 flex-row">
                <input
                  type="checkbox"
                  class="h-5 w-5 rounded border-[#dbe0e6] border-2 bg-transparent text-[#1d78f0] checked:bg-[#1d78f0] checked:border-[#1d78f0] checked:bg-[image:--checkbox-tick-svg] focus:ring-0 focus:ring-offset-0 focus:border-[#dbe0e6] focus:outline-none"
                />
                <p class="text-[#111418] text-base font-normal leading-normal">GeoJSON</p>
              </label>
              <label class="flex gap-x-3 py-3 flex-row">
                <input
                  type="checkbox"
                  class="h-5 w-5 rounded border-[#dbe0e6] border-2 bg-transparent text-[#1d78f0] checked:bg-[#1d78f0] checked:border-[#1d78f0] checked:bg-[image:--checkbox-tick-svg] focus:ring-0 focus:ring-offset-0 focus:border-[#dbe0e6] focus:outline-none"
                />
                <p class="text-[#111418] text-base font-normal leading-normal">Other</p>
              </label>
            </div>
            <h4 class="text-[#60728a] text-sm font-bold leading-normal tracking-[0.015em] px-4 py-2 text-center">Category</h4>
            <div class="px-4">
              <label class="flex gap-x-3 py-3 flex-row">
                <input
                  type="checkbox"
                  class="h-5 w-5 rounded border-[#dbe0e6] border-2 bg-transparent text-[#1d78f0] checked:bg-[#1d78f0] checked:border-[#1d78f0] checked:bg-[image:--checkbox-tick-svg] focus:ring-0 focus:ring-offset-0 focus:border-[#dbe0e6] focus:outline-none"
                />
                <p class="text-[#111418] text-base font-normal leading-normal">Population</p>
              </label>
              <label class="flex gap-x-3 py-3 flex-row">
                <input
                  type="checkbox"
                  class="h-5 w-5 rounded border-[#dbe0e6] border-2 bg-transparent text-[#1d78f0] checked:bg-[#1d78f0] checked:border-[#1d78f0] checked:bg-[image:--checkbox-tick-svg] focus:ring-0 focus:ring-offset-0 focus:border-[#dbe0e6] focus:outline-none"
                />
                <p class="text-[#111418] text-base font-normal leading-normal">Health</p>
              </label>
              <label class="flex gap-x-3 py-3 flex-row">
                <input
                  type="checkbox"
                  class="h-5 w-5 rounded border-[#dbe0e6] border-2 bg-transparent text-[#1d78f0] checked:bg-[#1d78f0] checked:border-[#1d78f0] checked:bg-[image:--checkbox-tick-svg] focus:ring-0 focus:ring-offset-0 focus:border-[#dbe0e6] focus:outline-none"
                />
                <p class="text-[#111418] text-base font-normal leading-normal">Education</p>
              </label>
              <label class="flex gap-x-3 py-3 flex-row">
                <input
                  type="checkbox"
                  class="h-5 w-5 rounded border-[#dbe0e6] border-2 bg-transparent text-[#1d78f0] checked:bg-[#1d78f0] checked:border-[#1d78f0] checked:bg-[image:--checkbox-tick-svg] focus:ring-0 focus:ring-offset-0 focus:border-[#dbe0e6] focus:outline-none"
                />
                <p class="text-[#111418] text-base font-normal leading-normal">Economy</p>
              </label>
            </div>
            <h4 class="text-[#60728a] text-sm font-bold leading-normal tracking-[0.015em] px-4 py-2 text-center">Source</h4>
            <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
              <label class="flex flex-col min-w-40 flex-1">
                <select
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#111418] focus:outline-0 focus:ring-0 border border-[#dbe0e6] bg-white focus:border-[#dbe0e6] h-14 bg-[image:--select-button-svg] placeholder:text-[#60728a] p-[15px] text-base font-normal leading-normal"
                >
                  <option value="one">Select source</option>
                  <option value="two">two</option>
                  <option value="three">three</option>
                </select>
              </label>
            </div>
            <h4 class="text-[#60728a] text-sm font-bold leading-normal tracking-[0.015em] px-4 py-2 text-center">Last Update</h4>
            <div class="flex flex-col gap-3 p-4">
              <label class="flex items-center gap-4 rounded-lg border border-solid border-[#dbe0e6] p-[15px]">
                <input
                  type="radio"
                  class="h-5 w-5 border-2 border-[#dbe0e6] bg-transparent text-transparent checked:border-[#111418] checked:bg-[image:--radio-dot-svg] focus:outline-none focus:ring-0 focus:ring-offset-0 checked:focus:border-[#111418]"
                  name="2a0ced8a-7ba2-4851-af5c-33f22c0a54ed"
                  checked=""
                />
                <div class="flex grow flex-col"><p class="text-[#111418] text-sm font-medium leading-normal">Last 7 days</p></div>
              </label>
              <label class="flex items-center gap-4 rounded-lg border border-solid border-[#dbe0e6] p-[15px]">
                <input
                  type="radio"
                  class="h-5 w-5 border-2 border-[#dbe0e6] bg-transparent text-transparent checked:border-[#111418] checked:bg-[image:--radio-dot-svg] focus:outline-none focus:ring-0 focus:ring-offset-0 checked:focus:border-[#111418]"
                  name="2a0ced8a-7ba2-4851-af5c-33f22c0a54ed"
                />
                <div class="flex grow flex-col"><p class="text-[#111418] text-sm font-medium leading-normal">Last 30 days</p></div>
              </label>
              <label class="flex items-center gap-4 rounded-lg border border-solid border-[#dbe0e6] p-[15px]">
                <input
                  type="radio"
                  class="h-5 w-5 border-2 border-[#dbe0e6] bg-transparent text-transparent checked:border-[#111418] checked:bg-[image:--radio-dot-svg] focus:outline-none focus:ring-0 focus:ring-offset-0 checked:focus:border-[#111418]"
                  name="2a0ced8a-7ba2-4851-af5c-33f22c0a54ed"
                />
                <div class="flex grow flex-col"><p class="text-[#111418] text-sm font-medium leading-normal">Last year</p></div>
              </label>
            </div>
          </div>
          <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
            <div class="flex flex-wrap justify-between gap-3 p-4"><p class="text-[#111418] tracking-light text-[32px] font-bold leading-tight min-w-72">Datasets</p></div>
            <div class="p-4">
              <div class="flex items-stretch justify-between gap-4 rounded-lg">
                <div class="flex flex-[2_2_0px] flex-col gap-4">
                  <div class="flex flex-col gap-1">
                    <p class="text-[#60728a] text-sm font-normal leading-normal">CSV</p>
                    <p class="text-[#111418] text-base font-bold leading-tight">Demographic Data of Abidjan</p>
                    <p class="text-[#60728a] text-sm font-normal leading-normal">
                      Detailed demographic information for the city of Abidjan, including age, gender, and education levels.
                    </p>
                  </div>
                  <a href="{{ route('dataset_details') }}"
                    class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-4 flex-row-reverse bg-[#f0f2f5] text-[#111418] pr-2 gap-1 text-sm font-medium leading-normal w-fit"
                  >
                    <div class="text-[#111418]" data-icon="Eye" data-size="18px" data-weight="regular">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" fill="currentColor" viewBox="0 0 256 256">
                        <path
                          d="M247.31,124.76c-.35-.79-8.82-19.58-27.65-38.41C194.57,61.26,162.88,48,128,48S61.43,61.26,36.34,86.35C17.51,105.18,9,124,8.69,124.76a8,8,0,0,0,0,6.5c.35.79,8.82,19.57,27.65,38.4C61.43,194.74,93.12,208,128,208s66.57-13.26,91.66-38.34c18.83-18.83,27.3-37.61,27.65-38.4A8,8,0,0,0,247.31,124.76ZM128,192c-30.78,0-57.67-11.19-79.93-33.25A133.47,133.47,0,0,1,25,128,133.33,133.33,0,0,1,48.07,97.25C70.33,75.19,97.22,64,128,64s57.67,11.19,79.93,33.25A133.46,133.46,0,0,1,231.05,128C223.84,141.46,192.43,192,128,192Zm0-112a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160Z"
                        ></path>
                      </svg>
                    </div>
                    <span class="truncate">View Dataset</span>
                    </a>
                </div>
                <div
                  class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg flex-1"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCdxsS6sKaLiL15_ap4TfA-mjLO9RoNoo4g1wVk-aDYqxlHwoK5Jq0I-0roSah1xndqHCFWVp5rvIz5vlsEDG3irueFdlHOO-cfZnsHSM-YjyQCFsdUij9lzbUcdtiNBYLBivqwz9dTwdt8hEEwH-HiB46_ZLVr-UmF1zv00UBrMfkMbCeR4XHFSdcfAwg5z-voG5-VudL89Nku7t-qJxqLAazqjvAu94buhDV5JLzbPLCNbl14T4WBdW1qGbV2j2V0qvt__ufl");'
                ></div>
              </div>
            </div>
            <div class="p-4">
              <div class="flex items-stretch justify-between gap-4 rounded-lg">
                <div class="flex flex-[2_2_0px] flex-col gap-4">
                  <div class="flex flex-col gap-1">
                    <p class="text-[#60728a] text-sm font-normal leading-normal">XLSX</p>
                    <p class="text-[#111418] text-base font-bold leading-tight">Healthcare Facilities in Yamoussoukro</p>
                    <p class="text-[#60728a] text-sm font-normal leading-normal">
                      A comprehensive list of healthcare facilities in Yamoussoukro, including hospitals, clinics, and pharmacies.
                    </p>
                  </div>
                  <button
                    class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-4 flex-row-reverse bg-[#f0f2f5] text-[#111418] pr-2 gap-1 text-sm font-medium leading-normal w-fit"
                  >
                    <div class="text-[#111418]" data-icon="Eye" data-size="18px" data-weight="regular">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" fill="currentColor" viewBox="0 0 256 256">
                        <path
                          d="M247.31,124.76c-.35-.79-8.82-19.58-27.65-38.41C194.57,61.26,162.88,48,128,48S61.43,61.26,36.34,86.35C17.51,105.18,9,124,8.69,124.76a8,8,0,0,0,0,6.5c.35.79,8.82,19.57,27.65,38.4C61.43,194.74,93.12,208,128,208s66.57-13.26,91.66-38.34c18.83-18.83,27.3-37.61,27.65-38.4A8,8,0,0,0,247.31,124.76ZM128,192c-30.78,0-57.67-11.19-79.93-33.25A133.47,133.47,0,0,1,25,128,133.33,133.33,0,0,1,48.07,97.25C70.33,75.19,97.22,64,128,64s57.67,11.19,79.93,33.25A133.46,133.46,0,0,1,231.05,128C223.84,141.46,192.43,192,128,192Zm0-112a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160Z"
                        ></path>
                      </svg>
                    </div>
                    <span class="truncate">View Dataset</span>
                  </button>
                </div>
                <div
                  class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg flex-1"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBRoJ9Y-4LNdifHwyxok6894YWRwjDKTSaOgJlQvQ-1jldFusXnKxfDQi35lnHg-pLSlFbG_GLkyLRIWPDX9_stmI03uzvSomTwofFY14dyHzsg0xQlVyyFWdEvLzikb5Uf-jdot1HM0brsLxX_9IL9bhy0W6R9DeIAMm7R5hqap_sJ8fvJkYobDWAspIQvDuJugtlJdxEXBpIzHsBD5w_JT-GGMhtdyIw543TZmKII-qcx7mtiQtcj7g5N7EAzNbdYcdRUuKUL");'
                ></div>
              </div>
            </div>
            <div class="p-4">
              <div class="flex items-stretch justify-between gap-4 rounded-lg">
                <div class="flex flex-[2_2_0px] flex-col gap-4">
                  <div class="flex flex-col gap-1">
                    <p class="text-[#60728a] text-sm font-normal leading-normal">GeoJSON</p>
                    <p class="text-[#111418] text-base font-bold leading-tight">Geographic Boundaries of Regions</p>
                    <p class="text-[#60728a] text-sm font-normal leading-normal">Geographic boundaries for all regions in the country, useful for mapping and spatial analysis.</p>
                  </div>
                  <button
                    class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-4 flex-row-reverse bg-[#f0f2f5] text-[#111418] pr-2 gap-1 text-sm font-medium leading-normal w-fit"
                  >
                    <div class="text-[#111418]" data-icon="Eye" data-size="18px" data-weight="regular">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" fill="currentColor" viewBox="0 0 256 256">
                        <path
                          d="M247.31,124.76c-.35-.79-8.82-19.58-27.65-38.41C194.57,61.26,162.88,48,128,48S61.43,61.26,36.34,86.35C17.51,105.18,9,124,8.69,124.76a8,8,0,0,0,0,6.5c.35.79,8.82,19.57,27.65,38.4C61.43,194.74,93.12,208,128,208s66.57-13.26,91.66-38.34c18.83-18.83,27.3-37.61,27.65-38.4A8,8,0,0,0,247.31,124.76ZM128,192c-30.78,0-57.67-11.19-79.93-33.25A133.47,133.47,0,0,1,25,128,133.33,133.33,0,0,1,48.07,97.25C70.33,75.19,97.22,64,128,64s57.67,11.19,79.93,33.25A133.46,133.46,0,0,1,231.05,128C223.84,141.46,192.43,192,128,192Zm0-112a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160Z"
                        ></path>
                      </svg>
                    </div>
                    <span class="truncate">View Dataset</span>
                  </button>
                </div>
                <div
                  class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg flex-1"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCQAQ2P0pPqQqAqnIqRlcHAelL_Vl4nX95RaQ0SLgwle8lPmiI07isJ0MzvKkaISm9x6Y8X9393k2xFyeSTySG0wkfCFZXITs13JPChL90FTaJO1bHOigsX-_3J5-zT0hHh0OMgZQf0JGS-VMQk_PdxyRLy9iVJLn88c0AYrv28wwT5jZv2kX_3nLT1NGYqibcNN20aDnyg-cZSXEZKy_SXpNMz5N4_k4TbqAEQhlyCUuYPJArnXwhDnDuzFwkB-efmK1w9B3SQ");'
                ></div>
              </div>
            </div>
            <div class="p-4">
              <div class="flex items-stretch justify-between gap-4 rounded-lg">
                <div class="flex flex-[2_2_0px] flex-col gap-4">
                  <div class="flex flex-col gap-1">
                    <p class="text-[#60728a] text-sm font-normal leading-normal">CSV</p>
                    <p class="text-[#111418] text-base font-bold leading-tight">School Enrollment Statistics</p>
                    <p class="text-[#60728a] text-sm font-normal leading-normal">Data on school enrollment rates across different regions and educational levels.</p>
                  </div>
                  <button
                    class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-4 flex-row-reverse bg-[#f0f2f5] text-[#111418] pr-2 gap-1 text-sm font-medium leading-normal w-fit"
                  >
                    <div class="text-[#111418]" data-icon="Eye" data-size="18px" data-weight="regular">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" fill="currentColor" viewBox="0 0 256 256">
                        <path
                          d="M247.31,124.76c-.35-.79-8.82-19.58-27.65-38.41C194.57,61.26,162.88,48,128,48S61.43,61.26,36.34,86.35C17.51,105.18,9,124,8.69,124.76a8,8,0,0,0,0,6.5c.35.79,8.82,19.57,27.65,38.4C61.43,194.74,93.12,208,128,208s66.57-13.26,91.66-38.34c18.83-18.83,27.3-37.61,27.65-38.4A8,8,0,0,0,247.31,124.76ZM128,192c-30.78,0-57.67-11.19-79.93-33.25A133.47,133.47,0,0,1,25,128,133.33,133.33,0,0,1,48.07,97.25C70.33,75.19,97.22,64,128,64s57.67,11.19,79.93,33.25A133.46,133.46,0,0,1,231.05,128C223.84,141.46,192.43,192,128,192Zm0-112a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160Z"
                        ></path>
                      </svg>
                    </div>
                    <span class="truncate">View Dataset</span>
                  </button>
                </div>
                <div
                  class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg flex-1"
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDz9-LNHKPbjKKb-aAGhUrT3EUO90mBcIxB9L6wL0iuVlebhYHx6lRrIKiOfXqE5OylOVpbS4lA3TCgmwTiqdzOraWSnFRwYMZC2hD6Z5pv01ehLEGL_j3K3dxafPAMjRqeRgT9VbTH4kWqCbLm7RaUe6XpYw6VkqvzF8OZ2H3OSYtKOERQ-uEuSfcTfeKwOPqEVaimXuAEdw8yeHgQVr1BggNq4isl51AzPZeIe6GHuW0iKY5WZGn-xwaXS_CfWTJ83y8G2Xb_");'
                ></div>
              </div>
            </div>
            <div class="flex items-center justify-center p-4">
              <a href="#" class="flex size-10 items-center justify-center">
                <div class="text-[#111418]" data-icon="CaretLeft" data-size="18px" data-weight="regular">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" fill="currentColor" viewBox="0 0 256 256">
                    <path d="M165.66,202.34a8,8,0,0,1-11.32,11.32l-80-80a8,8,0,0,1,0-11.32l80-80a8,8,0,0,1,11.32,11.32L91.31,128Z"></path>
                  </svg>
                </div>
              </a>
              <a class="text-sm font-bold leading-normal tracking-[0.015em] flex size-10 items-center justify-center text-[#111418] rounded-full bg-[#f0f2f5]" href="#">1</a>
              <a class="text-sm font-normal leading-normal flex size-10 items-center justify-center text-[#111418] rounded-full" href="#">2</a>
              <a class="text-sm font-normal leading-normal flex size-10 items-center justify-center text-[#111418] rounded-full" href="#">3</a>
              <span class="text-sm font-normal leading-normal flex size-10 items-center justify-center text-[#111418] rounded-full" href="#">...</span>
              <a class="text-sm font-normal leading-normal flex size-10 items-center justify-center text-[#111418] rounded-full" href="#">10</a>
              <a href="#" class="flex size-10 items-center justify-center">
                <div class="text-[#111418]" data-icon="CaretRight" data-size="18px" data-weight="regular">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" fill="currentColor" viewBox="0 0 256 256">
                    <path d="M181.66,133.66l-80,80a8,8,0,0,1-11.32-11.32L164.69,128,90.34,53.66a8,8,0,0,1,11.32-11.32l80,80A8,8,0,0,1,181.66,133.66Z"></path>
                  </svg>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
