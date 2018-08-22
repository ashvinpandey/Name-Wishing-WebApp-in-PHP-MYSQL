<?php
    $quotes[] = "We all get the exact same 365 days. The only difference is what we do with them.";
    $quotes[] = "I wish this year has lesser disasters, lesser hate, lesser accidents and loads of love. Happy New Year.";
    $quotes[] = "I wish this year has lesser disasters, lesser hate, lesser accidents and loads of love. Happy New Year.";
    $quotes[] = "No one can go back and start a new beginning, but anybody can start today and make a new ending.";
    $quotes[] = "We are the authors of our destinies. No one can see the vision any clearer, believe in and work any harder to make it a reality more than the visionary.";
    $quotes[] = "Every New Year people get you some presents but your best present you get never changes: Your own existence! It is also your best present to others!";
    $quotes[] = "In the New Year, may your right hand always be stretched out in friendship, never in want.";
    $quotes[] = "Genuine success comes only to those who are ready for it. So never step back and always have courage to accept new challenges.";
    $quotes[] = "Before the calendar turns a new leaf over, before the social networking sites get flooded with messages, before the mobile networks get congested, let me take a quiet moment out to wish you a wonderful, happy, healthy and prosperous New Year.";
	$quotes[] = "Don't wait for a new year to change your perspective. Get up and be proactive today! ";
	$quotes[] = "The object of a new year is not that we should have a new year. It is that we should have a new soul. ";
	$quotes[] = "Embrace the New Year with not just a new look but also with a new and positive approach to make things simple in the year ahead";
	$quotes[] = "This new year message has nothing much to say but to request your lips to stretch a little and brighten this world with a sweet smile.";
	$quotes[] = "In the New Year, you carry all the experiences of the past years and that is the greatest power of every New Year! This year again, you are less student and more master!";
	$quotes[] = "New Year – a new chapter, new verse, or just the same old story? Ultimately we write it. The choice is ours";
	$quotes[] = "We will open the book. Its pages are blank. We are going to put words on them ourselves. The book is called Opportunity and its first chapter is New Year’s Day.";
	$quotes[] = "Learn from yesterday, live for today, hope for tomorrow.";
    srand ((double) microtime() * 1000000);
    $randomquote = rand(0,count($quotes)-1);
    echo "<p>" . $quotes[$randomquote] . "</p>";
    ?>