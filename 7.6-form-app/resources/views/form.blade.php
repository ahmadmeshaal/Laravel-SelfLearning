<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Form Submission</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">
</head>

<body class="container mt-5">

    <h2>Registration Form</h2>

    <form method="POST" action="{{ route('form.handle') }}">
        @csrf

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name"
                class="form-control"
                value="{{ old('name') }}">

            @error('name')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email"
                class="form-control"
                value="{{ old('email') }}">

            @error('email')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label>Age</label>
            <input type="number" name="age"
                class="form-control"
                value="{{ old('age') }}">

            @error('age')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password"
                class="form-control">

            @error('password')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label>Gender</label>

            <div class="form-check">
                <input type="radio" name="gender"
                    value="male"
                    class="form-check-input"
                    {{ old('gender') == 'male' ? 'checked' : '' }}>
                <label>Male</label>
            </div>

            <div class="form-check">
                <input type="radio" name="gender"
                    value="female"
                    class="form-check-input"
                    {{ old('gender') == 'female' ? 'checked' : '' }}>
                <label>Female</label>
            </div>

            @error('gender')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label>Role</label>

            <select name="role" class="form-select">
                <option value="">-- Select Role --</option>

                <option value="user"
                    {{ old('role') == 'user' ? 'selected' : '' }}>
                    User
                </option>

                <option value="admin"
                    {{ old('role') == 'admin' ? 'selected' : '' }}>
                    Admin
                </option>
            </select>

            @error('role')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label>Bio</label>

            <textarea name="bio"
                class="form-control">{{ old('bio') }}</textarea>

            @error('bio')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-check mb-3">
            <input type="checkbox"
                id="confirm"
                name="confirm"
                value="1"
                class="form-check-input"
                {{ old('confirm') ? 'checked' : '' }}>

            <label for="confirm" class="form-check-label">
                I confirm the information is correct
            </label>

            @error('confirm')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit"
            class="btn btn-primary"
            id="submitBtn"
            disabled>
            Submit
        </button>

    </form>

    <script>
        const confirmCheckbox = document.getElementById('confirm');
        const submitBtn = document.getElementById('submitBtn');

        function updateSubmitButton() {
            submitBtn.disabled = !confirmCheckbox.checked;
        }

        confirmCheckbox.addEventListener('change', updateSubmitButton);

        updateSubmitButton();
    </script>

</body>

</html>