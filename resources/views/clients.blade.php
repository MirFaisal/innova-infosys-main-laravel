@extends('master.master') @section('content')
<div
    class="max-w-screen-xl mx-auto my-24 flex flex-col items-center justify-center"
>
    <div class="text my-10 pb-5 flex justify-start w-full">
        <h2 class="font-bold text-3xl border-s-4 border-black ps-4 ms-2">
            Our Clients
        </h2>
    </div>
    <div class="clients-container flex justify-center flex-wrap">
        <div
            class="border p-8 flex justify-center items-center flex-auto hover:"
        >
            <img loading="lazy" src="{{ asset('clients/ACME.png') }}" alt="" />
        </div>
        <div
            class="border p-8 flex justify-center items-center flex-auto hover:"
        >
            <img
                loading="lazy"
                src="{{ asset('clients/unilivar.jpeg') }}"
                alt=""
            />
        </div>
        <div
            class="border p-8 flex justify-center items-center flex-auto hover:"
        >
            <img
                loading="lazy"
                src="{{ asset('clients/apollo-hospitals-logo.png') }}"
                alt=""
            />
        </div>
        <div
            class="border p-8 flex justify-center items-center flex-auto hover:"
        >
            <img
                loading="lazy"
                src="{{ asset('clients/asian_paints.png') }}"
                alt=""
            />
        </div>
        <div
            class="border p-8 flex justify-center items-center flex-auto hover:"
        >
            <img
                loading="lazy"
                src="{{
                    asset(
                        'clients/bangladesh-bidyut-unnayan-board-logo-BDC2419C55-seeklogo.com.png'
                    )
                }}"
                alt=""
            />
        </div>
        <div
            class="border p-8 flex justify-center items-center flex-auto hover:"
        >
            <img
                loading="lazy"
                src="{{ asset('clients/bangladesh_bank.png') }}"
                alt=""
            />
        </div>
        <div
            class="border p-8 flex justify-center items-center flex-auto hover:"
        >
            <img
                loading="lazy"
                src="{{ asset('clients/banglalink.png') }}"
                alt=""
            />
        </div>
        <div
            class="border p-8 flex justify-center items-center flex-auto hover:"
        >
            <img loading="lazy" src="{{ asset('clients/robi.png') }}" alt="" />
        </div>
        <div
            class="border p-8 flex justify-center items-center flex-auto hover:"
        >
            <img
                loading="lazy"
                src="{{ asset('clients/bashundhara-group-vector-logo.png') }}"
                alt=""
            />
        </div>
        <div
            class="border p-8 flex justify-center items-center flex-auto hover:"
        >
            <img loading="lazy" src="{{ asset('clients/beql.jpeg') }}" alt="" />
        </div>
        <div
            class="border p-8 flex justify-center items-center flex-auto hover:"
        >
            <img
                loading="lazy"
                src="{{ asset('clients/beximco.png') }}"
                alt=""
            />
        </div>
        <div
            class="border p-8 flex justify-center items-center flex-auto hover:"
        >
            <img
                loading="lazy"
                src="{{
                    asset(
                        'clients/british-american-tobacco-logo-24008E435B-seeklogo.com.png'
                    )
                }}"
                alt=""
            />
        </div>
        <div
            class="border p-8 flex justify-center items-center flex-auto hover:"
        >
            <img
                loading="lazy"
                src="{{ asset('clients/confidences.png') }}"
                alt=""
            />
        </div>
        <div
            class="border p-8 flex justify-center items-center flex-auto hover:"
        >
            <img loading="lazy" src="{{ asset('clients/egcb.png') }}" alt="" />
        </div>
        <div
            class="border p-8 flex justify-center items-center flex-auto hover:"
        >
            <img
                loading="lazy"
                src="{{ asset('clients/germeen.jpg') }}"
                alt=""
            />
        </div>
        <div
            class="border p-8 flex justify-center items-center flex-auto hover:"
        >
            <img loading="lazy" src="{{ asset('clients/hcpl.jpeg') }}" alt="" />
        </div>
        <div
            class="border p-8 flex justify-center items-center flex-auto hover:"
        >
            <img
                loading="lazy"
                src="{{ asset('clients/holcim-logo-png-transparent.png') }}"
                alt=""
            />
        </div>
        <div
            class="border p-8 flex justify-center items-center flex-auto hover:"
        >
            <img
                loading="lazy"
                src="{{ asset('clients/incepta.png') }}"
                alt=""
            />
        </div>
        <div
            class="border p-8 flex justify-center items-center flex-auto hover:"
        >
            <img
                loading="lazy"
                src="{{ asset('clients/labaid-pharma-logo.jpg') }}"
                alt=""
            />
        </div>
        <div
            class="border p-8 flex justify-center items-center flex-auto hover:"
        >
            <img
                loading="lazy"
                src="{{ asset('clients/lafarge.png') }}"
                alt=""
            />
        </div>
        <div
            class="border p-8 flex justify-center items-center flex-auto hover:"
        >
            <img
                loading="lazy"
                src="{{ asset('clients/linde-logo-png-transparent.png') }}"
                alt=""
            />
        </div>
        <div
            class="border p-8 flex justify-center items-center flex-auto hover:"
        >
            <img loading="lazy" src="{{ asset('clients/mia.png') }}" alt="" />
        </div>
        <div
            class="border p-8 flex justify-center items-center flex-auto hover:"
        >
            <img loading="lazy" src="{{ asset('clients/mst.png') }}" alt="" />
        </div>
        <div
            class="border p-8 flex justify-center items-center flex-auto hover:"
        >
            <img loading="lazy" src="{{ asset('clients/nhfbd.png') }}" alt="" />
        </div>
        <div
            class="border p-8 flex justify-center items-center flex-auto hover:"
        >
            <img loading="lazy" src="{{ asset('clients/nld.png') }}" alt="" />
        </div>
        <div
            class="border p-8 flex justify-center items-center flex-auto hover:"
        >
            <img
                loading="lazy"
                src="{{
                    asset('clients/nuvista-pharma-limited-bangladesh-logo.png')
                }}"
                alt=""
            />
        </div>
        <div
            class="border p-8 flex justify-center items-center flex-auto hover:"
        >
            <img
                loading="lazy"
                src="{{ asset('clients/popular.jpg') }}"
                alt=""
            />
        </div>
        <div
            class="border p-8 flex justify-center items-center flex-auto hover:"
        >
            <img
                loading="lazy"
                src="{{ asset('clients/radisson_Blu_logo.svg.png') }}"
                alt=""
            />
        </div>
        <div
            class="border p-8 flex justify-center items-center flex-auto hover:"
        >
            <img
                loading="lazy"
                src="{{ asset('clients/Renata-Blue.png') }}"
                alt=""
            />
        </div>

        <div
            class="border p-8 flex justify-center items-center flex-auto hover:"
        >
            <img
                loading="lazy"
                src="{{ asset('clients/Roundel_of_Bangladesh.png') }}"
                alt=""
            />
        </div>
        <div
            class="border p-8 flex justify-center items-center flex-auto hover:"
        >
            <img
                loading="lazy"
                src="{{ asset('clients/sanofi.png') }}"
                alt=""
            />
        </div>
        <div
            class="border p-8 flex justify-center items-center flex-auto hover:"
        >
            <img
                loading="lazy"
                src="{{ asset('clients/Drug_International_Ltd_logo.png') }}"
                alt=""
            />
        </div>
        <div
            class="border p-8 flex justify-center items-center flex-auto hover:"
        >
            <img
                loading="lazy"
                src="{{ asset('clients/SKF_NEW_LOGO.png') }}"
                alt=""
            />
        </div>
        <div
            class="border p-8 flex justify-center items-center flex-auto hover:"
        >
            <img
                loading="lazy"
                src="{{
                    asset(
                        'clients/smc-enterprise-ltd-logo-1813D512EB-seeklogo.com.png'
                    )
                }}"
                alt=""
            />
        </div>
        <div
            class="border p-8 flex justify-center items-center flex-auto hover:"
        >
            <img
                loading="lazy"
                src="{{ asset('clients/square.png') }}"
                alt=""
            />
        </div>
    </div>
</div>
@endsection
