var utcToEastern = function(utc)
{
    var eastern = utc.substr(0, utc.indexOf(':')); 
    var end = utc.substr((utc.indexOf(" ")+1), utc.length+1); 

    var time = parseInt(eastern, 10);

    //handle 12 am, 1 am, 2 am, 3 am
    if((time == 12 || time == 1 || time == 2 || time == 3) && (end === "AM"))
    {
        if(time == 1 || time == 2 || time == 3)
        {
            time = 12 - (4-time);
        }  
        if(time == 12)
        {
            time = time - 4;
        }  
        utc = utc.replace(end, "PM")
    }
    else if((time == 12 || time == 1 || time == 2 || time == 3) && (end === "PM"))
    {
        if(time == 1 || time == 2 || time == 3)
        {
            time = 12 - (4-time);
        }  
        if(time == 12)
        {
            time = time - 4;
        }  
        utc = utc.replace(end, "AM")
    }
    else
    {
        time = time - 4;
    }

    utc = utc.replace(eastern, time.toString())

    return utc;
};