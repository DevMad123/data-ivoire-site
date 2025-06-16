@extends('layouts.public')

@section('title', 'Accueil')

@section('content')
    <div class="relative flex size-full min-h-screen flex-col bg-white group/design-root overflow-x-hidden" style='font-family: Inter, "Noto Sans", sans-serif;'>
      <div class="layout-container flex h-full grow flex-col">
        <div class="px-40 flex flex-1 justify-center py-5">
          <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
            <div class="@container">
              <div class="@[480px]:p-4">
                <div
                  class="flex min-h-[480px] flex-col gap-6 bg-cover bg-center bg-no-repeat @[480px]:gap-8 @[480px]:rounded-lg items-start justify-end px-4 pb-10 @[480px]:px-10"
                  style='background-image: linear-gradient(rgba(0, 0, 0, 0.1) 0%, rgba(0, 0, 0, 0.4) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuC5aLP54skLibqd43kVIUxEBDVLvNyldh8-EVM5h0nwMZ31qZGmSxM0eIIFyZJajoDzdcBH_xx4GuN71de-CX7RvwSiLXQDxggVt6ag-xPj750ArhD52puGj3z-cn79_FCqtXUXg9CBW7KSoNLA6N8DisYzzbvs1MgV8TbIQx_pSrw4n5t73mepRJkZeJZ-rhqI15CmZ_smzlNgOjER2_5anm1deMfZEbBHKdDE3-Qsc5yOkr7C23O7lHYr1Uo-tas3F5cdYcDb");'
                >
                  <div class="flex flex-col gap-2 text-left">
                    <h1
                      class="text-white text-4xl font-black leading-tight tracking-[-0.033em] @[480px]:text-5xl @[480px]:font-black @[480px]:leading-tight @[480px]:tracking-[-0.033em]"
                    >
                      Unlock the Power of Public Data
                    </h1>
                    <h2 class="text-white text-sm font-normal leading-normal @[480px]:text-base @[480px]:font-normal @[480px]:leading-normal">
                      Access, explore, and utilize a vast collection of open datasets from various government agencies and organizations.
                    </h2>
                  </div>
                  <button
                    class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 @[480px]:h-12 @[480px]:px-5 bg-[#1375f5] text-white text-sm font-bold leading-normal tracking-[0.015em] @[480px]:text-base @[480px]:font-bold @[480px]:leading-normal @[480px]:tracking-[0.015em]"
                  >
                    <span class="truncate">Explore Data</span>
                  </button>
                </div>
              </div>
            </div>
            <h2 class="text-[#111418] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Featured Datasets</h2>
            <div class="p-4">
              <div class="flex items-stretch justify-between gap-4 rounded-lg">
                <div class="flex flex-[2_2_0px] flex-col gap-4">
                  <div class="flex flex-col gap-1">
                    <p class="text-[#60728a] text-sm font-normal leading-normal">CSV | Ministry of Statistics | Updated: 2024-03-15</p>
                    <p class="text-[#111418] text-base font-bold leading-tight">National Population Census 2023</p>
                    <p class="text-[#60728a] text-sm font-normal leading-normal">
                      Detailed demographic data from the latest national census, including age, gender, education, and employment statistics. Updated annually.
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
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCTxa3y_2cacPwZn1yDBiYe5JU4kCdmlBl8s1gIG5fwdOQzo1M4B8XLia1ktE9zTFgCs6RbcJv-8mvoEV-d_q2YHiv2BUeMNirYaCLEUTEWzZD_F1tSwJgC3rODcC0G9kBxjoEmf7aOLYJ5q2RJmA4ARITNDq_QDLWjwdirZigNWJMF-BR3XEiJ8-1jV8NKSndbqd70MMcrQNZuyAnMBOGm3TTLj-HE1v6WwUUjEz-MOZHeFbTq7A0B0E_ar8LYPgPj4D7bQZFH");'
                ></div>
              </div>
            </div>
            <div class="p-4">
              <div class="flex items-stretch justify-between gap-4 rounded-lg">
                <div class="flex flex-[2_2_0px] flex-col gap-4">
                  <div class="flex flex-col gap-1">
                    <p class="text-[#60728a] text-sm font-normal leading-normal">XLSX | Department of Education | Updated: 2024-02-28</p>
                    <p class="text-[#111418] text-base font-bold leading-tight">Education Enrollment Statistics 2022-2023</p>
                    <p class="text-[#60728a] text-sm font-normal leading-normal">
                      Comprehensive data on student enrollment across all levels of education, from primary schools to universities, for the academic year 2022-2023.
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
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCYsRBpLhxgPhpDn1WNXtbLcVMc-OIoEOwkTzjRtYwx2f_qNm4wOeOq5QfYxiSdcbY_Nbmu9y-XGCJnjlYxlW9QAH9YuYXNNOZOk-PlAjsav2YGGrwZaW6jLSi6iFHo3O7Yku1xH4rUsYII0bZH4ZhtUsEkZuAVj2vmkxW_YyLtfS1x12xWwBtfpUs1860FtwldZ2zfYnb64phFRWxw6Nsqi56NT6OUEb_hiOICdYOwvssQHNSrLdR_0JiG4d11j215gisXLL_8");'
                ></div>
              </div>
            </div>
            <div class="p-4">
              <div class="flex items-stretch justify-between gap-4 rounded-lg">
                <div class="flex flex-[2_2_0px] flex-col gap-4">
                  <div class="flex flex-col gap-1">
                    <p class="text-[#60728a] text-sm font-normal leading-normal">GeoJSON | Ministry of Health | Updated: 2024-01-20</p>
                    <p class="text-[#111418] text-base font-bold leading-tight">Healthcare Facility Locations and Services</p>
                    <p class="text-[#60728a] text-sm font-normal leading-normal">
                      A directory of healthcare facilities nationwide, including hospitals, clinics, and specialized centers, with information on services offered and contact
                      details.
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
                  style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD-OG7qTV5DnfL0w8-NWNL89_LV70IMBcKVCdr5wuaLy75E1Ja29uubxPPz0D6UEqf5IU3LX5KJhRPZaWdC5r-r0OM_ToMlyoftiHzs0egiHGgVxEqo7RrM1chXd8zp7H6ySfGimH7sIyww1mlKxqw1Zui1psnoU7xj9SCkbGLH3nI1IRGa-EPVqsj9YdTgZ-V4hVvcWRWDCbBT-_cfpizZe9HMr5i4uWnoRYWISpfUq9giFvE-xEr3BnLYf3NaonRH364jEsqI");'
                ></div>
              </div>
            </div>
            <h2 class="text-[#111418] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Why Data Ivoire Matters</h2>
            <div class="flex flex-col gap-10 px-4 py-10 @container">
              <div class="grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3 p-0">
                <div class="flex flex-1 gap-3 rounded-lg border border-[#dbe0e6] bg-white p-4 flex-col">
                  <div class="text-[#111418]" data-icon="ShieldCheck" data-size="24px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M208,40H48A16,16,0,0,0,32,56v58.78c0,89.61,75.82,119.34,91,124.39a15.53,15.53,0,0,0,10,0c15.2-5.05,91-34.78,91-124.39V56A16,16,0,0,0,208,40Zm0,74.79c0,78.42-66.35,104.62-80,109.18-13.53-4.51-80-30.69-80-109.18V56H208ZM82.34,141.66a8,8,0,0,1,11.32-11.32L112,148.68l50.34-50.34a8,8,0,0,1,11.32,11.32l-56,56a8,8,0,0,1-11.32,0Z"
                      ></path>
                    </svg>
                  </div>
                  <div class="flex flex-col gap-1">
                    <h2 class="text-[#111418] text-base font-bold leading-tight">Transparency and Accountability</h2>
                    <p class="text-[#60728a] text-sm font-normal leading-normal">
                      Data Ivoire promotes transparency by allowing citizens to scrutinize government activities and hold public institutions accountable.
                    </p>
                  </div>
                </div>
                <div class="flex flex-1 gap-3 rounded-lg border border-[#dbe0e6] bg-white p-4 flex-col">
                  <div class="text-[#111418]" data-icon="Users" data-size="24px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M117.25,157.92a60,60,0,1,0-66.5,0A95.83,95.83,0,0,0,3.53,195.63a8,8,0,1,0,13.4,8.74,80,80,0,0,1,134.14,0,8,8,0,0,0,13.4-8.74A95.83,95.83,0,0,0,117.25,157.92ZM40,108a44,44,0,1,1,44,44A44.05,44.05,0,0,1,40,108Zm210.14,98.7a8,8,0,0,1-11.07-2.33A79.83,79.83,0,0,0,172,168a8,8,0,0,1,0-16,44,44,0,1,0-16.34-84.87,8,8,0,1,1-5.94-14.85,60,60,0,0,1,55.53,105.64,95.83,95.83,0,0,1,47.22,37.71A8,8,0,0,1,250.14,206.7Z"
                      ></path>
                    </svg>
                  </div>
                  <div class="flex flex-col gap-1">
                    <h2 class="text-[#111418] text-base font-bold leading-tight">Citizen Engagement</h2>
                    <p class="text-[#60728a] text-sm font-normal leading-normal">
                      Access to public data empowers citizens to participate in decision-making processes, contribute to policy development, and monitor public services.
                    </p>
                  </div>
                </div>
                <div class="flex flex-1 gap-3 rounded-lg border border-[#dbe0e6] bg-white p-4 flex-col">
                  <div class="text-[#111418]" data-icon="CurrencyDollar" data-size="24px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M152,120H136V56h8a32,32,0,0,1,32,32,8,8,0,0,0,16,0,48.05,48.05,0,0,0-48-48h-8V24a8,8,0,0,0-16,0V40h-8a48,48,0,0,0,0,96h8v64H104a32,32,0,0,1-32-32,8,8,0,0,0-16,0,48.05,48.05,0,0,0,48,48h16v16a8,8,0,0,0,16,0V216h16a48,48,0,0,0,0-96Zm-40,0a32,32,0,0,1,0-64h8v64Zm40,80H136V136h16a32,32,0,0,1,0,64Z"
                      ></path>
                    </svg>
                  </div>
                  <div class="flex flex-col gap-1">
                    <h2 class="text-[#111418] text-base font-bold leading-tight">Economic Development</h2>
                    <p class="text-[#60728a] text-sm font-normal leading-normal">
                      Data Ivoire fuels innovation and economic growth by enabling businesses and entrepreneurs to create new products, services, and insights based on publicly
                      available information.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <h2 class="text-[#111418] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Explore by Category</h2>
            <div class="flex gap-3 p-3 flex-wrap pr-4">
              <div class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-[#f0f2f5] pl-4 pr-4">
                <p class="text-[#111418] text-sm font-medium leading-normal">Population</p>
              </div>
              <div class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-[#f0f2f5] pl-4 pr-4">
                <p class="text-[#111418] text-sm font-medium leading-normal">Education</p>
              </div>
              <div class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-[#f0f2f5] pl-4 pr-4">
                <p class="text-[#111418] text-sm font-medium leading-normal">Health</p>
              </div>
              <div class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-[#f0f2f5] pl-4 pr-4">
                <p class="text-[#111418] text-sm font-medium leading-normal">Economy</p>
              </div>
              <div class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-[#f0f2f5] pl-4 pr-4">
                <p class="text-[#111418] text-sm font-medium leading-normal">Environment</p>
              </div>
              <div class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-[#f0f2f5] pl-4 pr-4">
                <p class="text-[#111418] text-sm font-medium leading-normal">Transportation</p>
              </div>
            </div>
            <div class="@container">
              <div class="flex flex-col justify-end gap-6 px-4 py-10 @[480px]:gap-8 @[480px]:px-10 @[480px]:py-20">
                <div class="flex flex-col gap-2 text-center">
                  <h1
                    class="text-[#111418] tracking-light text-[32px] font-bold leading-tight @[480px]:text-4xl @[480px]:font-black @[480px]:leading-tight @[480px]:tracking-[-0.033em] max-w-[720px]"
                  >
                    Stay Updated
                  </h1>
                  <p class="text-[#111418] text-base font-normal leading-normal max-w-[720px">
                    Subscribe to our newsletter to receive updates on new datasets, platform features, and Data Ivoire initiatives.
                  </p>
                </div>
                <div class="flex flex-1 justify-center">
                  <label class="flex flex-col min-w-40 h-14 max-w-[480px] flex-1 @[480px]:h-16">
                    <div class="flex w-full flex-1 items-stretch rounded-lg h-full">
                      <input
                        placeholder="Enter your email"
                        class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#111418] focus:outline-0 focus:ring-0 border-none bg-[#f0f2f5] focus:border-none h-full placeholder:text-[#60728a] px-4 rounded-r-none border-r-0 pr-2 text-sm font-normal leading-normal @[480px]:text-base @[480px]:font-normal @[480px]:leading-normal"
                        value=""
                      />
                      <div class="flex items-center justify-center rounded-r-lg border-l-0 border-none bg-[#f0f2f5] pr-2">
                        <button
                          class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 @[480px]:h-12 @[480px]:px-5 bg-[#1375f5] text-white text-sm font-bold leading-normal tracking-[0.015em] @[480px]:text-base @[480px]:font-bold @[480px]:leading-normal @[480px]:tracking-[0.015em]"
                        >
                          <span class="truncate">Subscribe</span>
                        </button>
                      </div>
                    </div>
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
