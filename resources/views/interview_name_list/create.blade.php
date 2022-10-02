<div style="text-align: center">
    <h4>
        {{ strtoupper($pre_interview->overseas_agencie->employer_name ?? '') }}
        &nbsp; INTERVIEW NAME LIST
        ({{ $pre_interview->interview_date ?? '' }})
    </h4>
</div>

<form action="" method="post">
    <div class="card-body">
        <p style="color: red">
            Choose Interview Name List Excel File for
            {{ strtoupper($pre_interview->overseas_agencie->employer_name ?? '') }}
        </p>
        <div class="input-group">
            <input type="file" class="form-control">
            <button class="btn btn-primary" type="button" id="button-addon2">
                Submit
            </button>
        </div>
    </div>
</form>

<br><br>
