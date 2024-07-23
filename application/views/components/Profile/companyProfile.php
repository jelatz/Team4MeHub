  <div class="tab-pane fade show active" id="pill-company" role="tabpanel" aria-labelledby="tab-company">
    <div class="container-fluid">
      <!-- FIRST ROW -->
      <p class="d-inline-block me-2">Branches : </p>
      <div class="form-check fs-6 d-inline-block">
        <label class="form-check-label fw-bold" for="branches">
          -ALL-
        </label>
        <input class="form-check-input" type="radio" name="all" id="branches">
      </div>
      <!-- SECOND ROW -->
      <div class="row mt-2">
        <div class="mb-3 col-auto col-md-6 col-xl-3">
          <label for="interEmployeeId" class="form-label">InterEmployeeID : <sup class="text-danger fs-5">*</sup></label>
          <input type="text" name="interEmployeeId" id="interEmployeeId" class="form-control">
        </div>
        <div class="mb-3 col-auto col-md-6 col-xl-3">
          <label for="americanName" class="form-label">American Name : <sup class="text-danger fs-5">*</sup></label>
          <input type="text" name="americanName" id="americanName" class="form-control">
        </div>
        <div class="mb-3 col-auto col-md-6 col-xl-3">
          <label for="account" class="form-label">Account : <sup class="text-danger fs-5">*</sup></label>
          <select name="account" id="account" class="form-select" aria-label="Default select">
            <option selected="">-select-</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
          </select>
        </div>
        <div class="mb-3 col-auto col-md-6 col-xl-3">
          <label for="dateHired" class="form-label">Date Hired : <sup class="text-danger fs-5">*</sup></label>
          <input type="text" name="dateHired" id="dateHired" class="form-control">
        </div>
      </div>
      <!-- THIRD ROW -->
      <div class="row mt-2">
        <div class="mb-3 col-auto col-md-6 col-xl-3">
          <label for="movement" class="form-label">Movement/Promotion Date : <sup class="text-danger fs-5">*</sup></label>
          <input type="text" name="movement" id="movement" class="form-control">
        </div>
        <div class="mb-3 col-auto col-md-6 col-xl-3">
          <label for="empStatus" class="form-label">Employement Status : <sup class="text-danger fs-5">*</sup></label>
          <select name="empStatus" id="empStatus" class="form-select" aria-label="Default select">
            <option selected="">-select-</option>
            <option value="regular">Regular</option>
            <option value="probationary">Probationary</option>
          </select>
        </div>
      </div>
      <!-- FOURTH ROW -->
      <div class="row mt-2">
        <div class="mb-3 col-auto col-md-6 col-xl-33">
          <label for="tin" class="form-label">TIN : </label>
          <input type="number" id="tin" name="tin" class="form-control">
        </div>
        <div class="mb-3 col-auto col-md-6 col-xl-3">
          <label for="sss" class="form-label">SSS No. : </label>
          <input type="number" name="sss" id="sss" class="form-control">
        </div>
        <div class="mb-3 col-auto col-md-6 col-xl-3">
          <label for="sss" class="form-label">PAG-IBIG No. : </label>
          <input type="number" name="sss" id="sss" class="form-control">
        </div>
        <div class="mb-3 col-auto col-md-6 col-xl-3">
          <label for="philhealth" class="form-label">PHILHEALTH No. : </label>
          <input type="number" name="philhealth" id="philhealth" class="form-control">
        </div>
      </div>
      <div class="row mt-2">
        <div class="mb-3 col-auto col-md-6 col-xl-3">
          <label for="department" class="form-label">Department : </label>
          <select name="department" id="department" class="form-select" aria-label="Default select">
            <option selected="">-select-</option>
            <option value="regular">Sagenet</option>
            <option value="probationary">Single Digits</option>
          </select>
        </div>
        <div class="mb-3 col-auto col-md-6 col-xl-3">
          <label for="accountType" class="form-label">Account Type :</label>
          <select name="department" id="department" class="form-select" aria-label="Default select">
            <option selected="">-select-</option>
            <option value="regular">OPS</option>
            <option value="probationary">Non Ops</option>
          </select>
        </div>
        <div class="mb-3 col-auto col-md-6 col-xl-3">
          <label for="accountRole" class="form-label">Account Role :</label>
          <select name="accountRole" id="accountRole" class="form-select" aria-label="Default select">
            <option selected="">-select-</option>
            <option value="regular">sample</option>
            <option value="probationary">sample2</option>
          </select>
        </div>
        <div class="mb-3 col-auto col-md-6 col-xl-3">
          <label for="opsManager" class="form-label">Operations Manager :</label>
          <select name="opsManager" id="opsManager" class="form-select" aria-label="Default select">
            <option selected="">-select-</option>
            <option value="regular">Name 1</option>
            <option value="probationary">Name 2</option>
          </select>
        </div>
      </div>
      <div class="row mt-2">
        <div class="mb-3 col-auto col-md-6 col-xl-3">
          <label for="accManager" class="form-label">Account Manager :</label>
          <select name="opsManager" id="opsManager" class="form-select" aria-label="Default select">
            <option selected="">-select-</option>
            <option value="regular">Name 1</option>
            <option value="probationary">Name 2</option>
          </select>
        </div>
        <div class="mb-3 col-auto col-md-6 col-xl-3">
          <label for="level" class="form-label">Levels :</label>
          <select name="level" id="level" class="form-select" aria-label="Default select">
            <option selected="">-select-</option>
            <option value="regular">TSE</option>
            <option value="probationary">IT DEV</option>
          </select>
        </div>
        <div class="mb-3 col-auto col-md-6 col-xl-3">
          <label for="emailDomain" class="form-label">Email Domain : <sup class="text-danger fs-5">*</sup></label>
          <input type="text" id="emailDomain" name="emailDomain" class="form-control">
          <small class="d-block text-primary">mail2@calltekcenter.com</small>
          <small class="d-block text-primary">mail2@calltekinc.com</small>
          <small class="d-block text-primary">calltekcenter.com</small>
        </div>
        <div class="mb-3 col-auto col-md-6 col-xl-3">
          <label for="certification" class="form-label">CTC Certification : <sup class="text-danger fs-5">*</sup></label>
          <select name="certification" id="certification" class="form-select" aria-label="Default select">
            <option selected="">-select-</option>
            <option value="regular">Supervisor</option>
            <option value="probationary">Team Leader</option>
          </select>
        </div>
      </div>
      <div class="row mt-2">
        <div class="mb-3 col-auto col-md-6 col-xl-3">
          <label for="accountTeam" class="form-label">Account Team :</label>
          <textarea class="form-control" placeholder="" style="height: 100px"></textarea>
          <strong>Current Team :</strong>
          <p>N/A</p>
        </div>
      </div>
    </div>
  </div>