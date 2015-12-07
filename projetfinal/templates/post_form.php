<br>

<form action="postspot.php" method="post">
    <fieldset>
            <select class="form-control" name="location">
                <option value="27, rue St-Guillaume">27, rue St-Guillaume</option>
                <option value="30, rue St-Guillaume">30, rue St-Guillaume</option>
                <option value="56, rue des Sts-Pères">56, rue des Sts-Pères</option>
                <option value="28, rue des Sts-Pères">28, rue des Sts-Pères</option>
                <option value="13, rue de l'Université">13, rue de l'Université</option>
                <option value="199, bd Saint Germain">199, bd Saint Germain</option>
            </select>  

        </div>
        <br>
        <div class="form-group">
            <input class="form-control" name="floor" placeholder="floor" type="text"/>
        </div>
        <div class="form-group">
            <input class="form-control" name="freespots" placeholder="free spots" type="text"/>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default">post</button>
        </div>
    </fieldset>
</form>
