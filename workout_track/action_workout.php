<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Workout</title>
</head>
<body style="margin: 0; padding: 0; font-family: Arial, sans-serif;">
    <form id="workoutForm" class="workout-form" method="post" action="save_action.php" style="width: 260px; height: 260px; display: flex; flex-direction: column; justify-content: center; align-items: center; padding: 20px; overflow: hidden;">
        <h3 id="workoutTitle" style="margin-bottom: 10px;">Workout</h3>
        <span class="close-btn" style="visibility: hidden;">×</span> 
        <div class="form-group" style="margin-bottom: 10px;">
            <label for="actionName" style="display: block; margin-bottom: 10px;">Name:</label>
            <input type="text" id="actionName" name="actionName" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;">
        </div>
        <div class="form-group" style="margin-bottom: 10px;"> <!-- Added margin-bottom here -->
            <div class="form-group" style="display: flex; justify-content: space-between; width: 100%;">
                <div class="sets" style="flex: 1; margin-right: 10px;">
                    <label for="sets" style="display: block; margin-bottom: 5px;">Sets:</label>
                    <input type="number" id="sets" name="sets" min="1" value="1" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;">
                </div>
                <div class="reps" style="flex: 1; margin-right: 10px;">
                    <label for="reps" style="display: block; margin-bottom: 5px;">Reps:</label>
                    <input type="number" id="reps" name="reps" min="1" value="1" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;">
                </div>
                <div class="weight" style="flex: 1;">
                    <label for="weight" style="display: block; margin-bottom: 5px;">Weight:</label>
                    <input type="number" id="weight" name="weight" min="0" value="0" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;">
                </div>
            </div>
        </div>
        <button type="submit" style="padding: 10px 20px; background-color: #007bff; color: #fff; border: none; border-radius: 5px; cursor: pointer;">Save</button>
    </form>
</body>
</html>