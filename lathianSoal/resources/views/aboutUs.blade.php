@extends("layout.layout")

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        {{-- Kita buat col-md-8 agar teks tidak terlalu lebar --}}
        <div class="col-md-8 text-center">
            
            <h1 class="fw-bold mb-4">About EduFun</h1>
            
            <p classs="lead" style="font-size: 1.15rem; line-height: 1.7;">
                EduFun adalah perusahaan pendidikan berbasis teknologi asal Indonesia. EduFun menyediakan layanan akses pendidikan dalam format tulisan berbahasa Indonesia yang disajikan secara online melalui website.
            </p>
            
            <p class="mt-4" style="font-size: 1.15rem; line-height: 1.7;">
                Hingga Juni 2024, EduFun memiliki lebih dari 10 ribu pengguna. EduFun hadir sebagai bentuk revolusi dari pendidikan di Indonesia dengan mengedepankan cara berpikir kritis, logis, rasional, dan sumber pengetahuan sains yang terintegrasi terhadap semua mahasiswa IT di Indonesia. EduFun bercita-cita mencetak generasi Indonesia yang memahami ilmu pengetahuan dan cinta belajar.
            </p>

        </div>
    </div>
</div>
@endsection