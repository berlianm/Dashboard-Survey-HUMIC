<div class="content content-fixed">
    <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
        <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li style="color: #B90000" class="breadcrumb-item active" aria-current="page">Survey Monitoring</li>
                    </ol>
                </nav>
                <h4 class="mg-b-0 tx-spacing--1">Selamat Datang Di Dashboard Survey HUMIC</h4>
            </div>
        </div>
        <div class="mx-0 mx-sm-auto">
            @if($quiz)
            <form class="card" method="post" action="{{route('survey.chartrev')}}">
            @csrf
            <input type="hidden" name="email" value="{{$email}}">
                <?php $no = 1; ?>
                @foreach($quiz as $q)
                <div class="card-footer text-end"></div> 
                <div class="card-body">                   
                    <div class="px-4" action="">
                        <h2 >{{$q['quiz']}}</h2>
                        <p class="text-center"><strong>Jawaban Anda:</strong></p>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="iCheck[{{$no}}]" value="5" id="iCheckAnswer5" />
                            <label class="form-check-label" for="iCheckAnswer5">
                                Sangat Baik
                            </label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="iCheck[{{$no}}]" value="4" id="iCheckAnswer4" />
                            <label class="form-check-label" for="iCheckAnswer4">
                                Baik
                            </label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="iCheck[{{$no}}]" value="3" id="iCheckAnswer3" />
                            <label class="form-check-label" for="iCheckAnswer3">
                                Cukup
                            </label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="iCheck[{{$no}}]" value="2" id="iCheckAnswer2" />
                            <label class="form-check-label" for="iCheckAnswer2">
                                Buruk
                            </label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="iCheck[{{$no}}]" value="1" id="iCheckAnswer1" />
                            <label class="form-check-label" for="iCheckAnswer1">
                                Sangat Buruk
                            </label>
                        </div>
                    </div>
                </div>
                <?php $no++; ?>  
                @endforeach
                <div class="card-footer text-end">                 
                    <button id="simpan" class="btn custom-btn" onclick="simpan()">Simpan</button>  
                </div>    
            </form>
            @endif  
        </div>
    </div><!-- container -->
</div><!-- content -->
