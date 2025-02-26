<x-layouts.main title="Home">
    <x-top-navbar />

    <x-navbar />

    <div class="page-wrapper ">
        <!-- Page header -->
        <!-- 	 -->
        <!-- Page body -->
        <div class="page-body">

            <x-profile.information />





        </div>

    </div>

    </x-app-layout>
    <style>
        @media (max-width: 767px) {

            .page-wrapper,
            .page-body {
                padding-left: 0 !important;
                padding-right: 0 !important;
            }
        }

        @media (min-width: 768px) {
            .page-wrapper {
                padding-left: 24px;
                /* px-6 equivalent */
                padding-right: 24px;
            }

            .page-body {
                padding-left: 76px;
                /* px-8 equivalent */
                padding-right: 76px;
            }
        }
    </style>
