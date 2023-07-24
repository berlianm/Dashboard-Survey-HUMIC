<div class="content content-fixed">
    <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
        <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Survey Monitoring</li>
                    </ol>
                </nav>
                <h4 class="mg-b-0 tx-spacing--1">Selamat Datang Di Dashboard Survey HUMIC</h4>
            </div>
        </div>
        <div class="mx-0 mx-sm-auto">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <p>
                            <strong>Berikan Pendapat Anda</strong>
                        </p>
                        <h2 id="quiz"></h2>
                    </div>
                    <hr />
                    <form class="px-4" action="">
                        <p class="text-center"><strong>Jawaban Anda:</strong></p>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="iCheck" value="5" id="iCheckAnswer5" />
                            <label class="form-check-label" for="iCheckAnswer5">
                                Sangat Baik
                            </label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="iCheck" value="4" id="iCheckAnswer4" />
                            <label class="form-check-label" for="iCheckAnswer4">
                                Baik
                            </label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="iCheck" value="3" id="iCheckAnswer3" />
                            <label class="form-check-label" for="iCheckAnswer3">
                                Cukup
                            </label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="iCheck" value="2" id="iCheckAnswer2" />
                            <label class="form-check-label" for="iCheckAnswer2">
                                Buruk
                            </label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="radio" name="iCheck" value="1" id="iCheckAnswer1" />
                            <label class="form-check-label" for="iCheckAnswer1">
                                Sangat Buruk
                            </label>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-end">                 
                    <button id="simpan" class="btn custom-btn" onclick="simpan()">Simpan</button>  

                    @foreach($quiz as $item)
                    <a  onclick="soal({{$item['id']}})" id="btn{{$item['id']}}"><span id="nosoal" style="color: white;"></span></a>
                    @endforeach
                </div>
                
            </div>
        </div>
    </div><!-- container -->
</div><!-- content -->
<script type="text/javascript">
$(document).ready(function() {
    $('#btn1').trigger('click'); 
});


function simpan() {
    no = $('#nosoal').text();
    Jwbn = $('input[name="iCheck"]:checked').val();    
    if (Jwbn) {      
        $.ajax({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            type: "post",
            url: "{{route('survey.answer')}}",
            data: {
                'email' :'{{$email}}',
                'id': no,
                'answer': Jwbn
            },
            success: function(data, text) {          
                selanjutnya();

            },
            error: function(request, status, error) {
                alert(request.responseText);
            }
        });
    }

}

function selanjutnya() {
    var tes_soal_nomor = parseInt($('#nosoal').text());
    var tes_soal_jml = parseInt({{ $countQuiz }});
    var tes_soal_tujuan = tes_soal_nomor + 1;

    if ((tes_soal_tujuan >= 1 && tes_soal_tujuan <= tes_soal_jml)) {
        $('#btn' + tes_soal_tujuan).trigger('click');
    } else {
        alert('Survey telah selesai');
        window.location.href = '{{url("chart/")}}/{{$email}}';        
    }
}

function soal(id) {
    $('input').iCheck('uncheck');
    $('#nosoal').text(id);
    $.ajax({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
        type: "post",
        url: "{{route('survey.quiz')}}",
        data: {
            'email' : '{{$email}}',
            'id': id
        },
        success: function(response, text) {
            var data = JSON.parse(response);
            console.log(data.quiz.quiz);
            $('#quiz').text(data.quiz.quiz);
           

            $.each(data.exam, function(i, resp) {
                $('input[name="iCheck"][value ="' + resp.answer + '"]').iCheck('check');
                $(':button[id="simpan"]').prop('disabled', false);
            });
        },
        error: function(request, status, error) {
            alert(request.responseText);
        }
    });
    
}

</script>
