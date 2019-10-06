function checkVals() {
    // Loop though
    $("tr.item").each(function () {
        $this = $(this);
        //Gets the before value
        var before = parseFloat($this.find(".before").text());
        //Gets the after value
        var after = parseFloat($this.find(".after").text());
        //Gets the Target constant and vairable
        var targets = getTarget($this.find(".target").text());

        //Assigns min target range
        var min = targets[0] - targets[1];
        //Assigns max target range
        var max = targets[0] + targets[1];

        //If both numbers are negative....
        if (min < 1 || max < 1) {
            if (before < min || before > max) {
                $this.find(".before").css("background-color", "red");
            }
            if (after < min || after > max) {
                $this.find(".after").css("background-color", "red");
            }
        } else {
            if (before < min || before > max) {
                $this.find(".before").css("background-color", "red");
            }
            if (after < min || after > max) {
                $this.find(".after").css("background-color", "red");
            }
        }

    });
}

function getTarget(target) {
    var targets = [];
    if (target.includes("°" && "+/-")){
        //check to see if target is in mm
        if (target.includes("m")) {
            values = target.split("mm +/-")
            console.log(values);
            targets[0] = parseFloat(values[0]);
            targets[1] = parseFloat(values[1]);
            return targets;
        }//if not mm its degrees
        else{
            console.log("A", target)
            values = target.split("' +/-")
            targets[0] = parseFloat(values[0].replace("°", "")) * 0.01;
            targets[1] = parseFloat(values[1].replace("°", "")) * 0.01;
            return targets;
        }

    }//checks for singlular target
    else if (target.includes('°')){
        console.log("B")
        targets[0]=0;
        targets[1]=0;
        return targets;
    }
}

//Submits Form and loads it in page using AJAX
$("#searchForm").submit(function (e) {
    var value = $("#receiptID").val();
    if (value) {
        $.post(
            'tables.php',
            $(this).serialize(),
            function (data, textStatus, jQxhr) {
                $('#requestData').html(data);
            },
        )
            .fail(function (jqXhr, textStatus, errorThrown) {
            });

        e.preventDefault();
    }
    console.log($("#leftBefore").text());

});