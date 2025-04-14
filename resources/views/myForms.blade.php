<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
    <style>
        .error-message {
            color: red;
            font-size: 14px;
            margin-top: 5px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .checkbox-group {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }
    </style>
</head>
<body>
    <h1>Student Registration Form</h1>
    @if ($errors->any())
        <div class="error-message">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form method="POST" action="{{ route('student.register') }}">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" pattern="[A-Za-z\s]+" title="Name can only contain letters and spaces.">
            @error('name')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" value="{{ old('age') }}">
            @error('age')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}">
            @error('email')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label>Gender:</label>
            <div>
                <input type="radio" id="male" name="gender" value="male" {{ old('gender') == 'male' ? 'checked' : '' }}>
                <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="female" {{ old('gender') == 'female' ? 'checked' : '' }}>
                <label for="female">Female</label>
            </div>
            @error('gender')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label>Hobbies:</label>
            <div class="checkbox-group">
                <label>
                    <input type="checkbox" name="hobbies[]" value="singing" {{ in_array('singing', old('hobbies', [])) ? 'checked' : '' }}>
                    Singing
                </label>
                <label>
                    <input type="checkbox" name="hobbies[]" value="reading" {{ in_array('reading', old('hobbies', [])) ? 'checked' : '' }}>
                    Reading
                </label>
                <label>
                    <input type="checkbox" name="hobbies[]" value="playing" {{ in_array('playing', old('hobbies', [])) ? 'checked' : '' }}>
                    Playing
                </label>
                @error('hobbies')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>
            @error('hobbies')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>
        
        <div>
            <button type="submit">Register</button>
        </div>
    </form>
</body>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 20px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input[type="email"],
    input[type="radio"],
    input[type="checkbox"] {
        margin-right: 10px;
    }

    .error-message {
        color: red;
        font-size: 0.9em;
    }

    button {
        background-color: #5cb85c;
        color: white;
        border: none;
        padding: 10px 15px;
        cursor: pointer;
    }

    button:hover {
        background-color: #4cae4c;
    }

    .checkbox-group {
        margin-top: 5px;
    }
</style>
</html> 