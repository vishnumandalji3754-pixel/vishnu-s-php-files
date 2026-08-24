<?php


//      MAHAYUDH ADVENTURE GAME
//      IN THIS SONU WILL ALWAY  DEFEATED AEXCEPT FIGHT AGAINST SHAKUNI(MAMA)


$name = "Sonu";

echo "=======sonu===vs===yodhas===============\n";
echo "        MAHAYUDH ADVENTURE \n";
echo "=======sonu===vs===yodhas============\n\n";

echo "Welcome, $name!\n";
echo "You have entered the great battlefield.\n";
echo "Your goal is to defeat your opponent and survive.\n\n";

echo " Yodhas are:\n";
echo "1. ARJUN\n";
echo "2. SHAKUNI\n";
echo "3. BHIM\n";
echo "4. DURYODHAN\n\n";

$ans = strtolower(readline("Whom do you want to fight? "));



//             ARJUN


if ($ans == "arjun") {

    echo "\n⚔️ You have chosen ARJUN!\n";
    echo "Arjun asks: Which type of Yudh do you want?\n\n";

    echo "1. Mal Yudh\n";
    echo "2. Gadha Yudh\n";
    echo "3. Danush Ban Yudh\n";

    $choice = strtolower(readline("Enter your choice: "));

    if ($choice == "mal yudh") {

        echo "\n⚔️ Mal Yudh begins!\n";
        echo "Arjun attacks you.\n";
        echo "$name's one hand is injured.\n";
        echo "You are defeated! $name\n";

    } elseif ($choice == "gadha yudh") {

        echo "\n🔨 Gadha Yudh begins!\n";
        echo "Arjun attacks your head.\n";
        echo "$name is badly injured.\n";
        echo "You are defeated! $name\n";

    } elseif ($choice == "danush ban yudh") {

        echo "\n🏹 Danush Ban Yudh begins!\n";
        echo "$name fights bravely against Arjun.\n";
        echo "After a great battle, $name accepts defeat.\n";

    } else {

        echo "\n❌ Invalid choice!\n";
    }



//             SHAKUNI


} elseif ($ans == "shakuni") {

    echo "\n You have chosen SHAKUNI!\n";
    echo "A battle begins between $name and Shakuni.\n\n";

    echo "1. Fight\n";
    echo "2. Use Strategy\n";

    $choice = strtolower(readline("Enter your choice: "));

    if ($choice == "fight") {

        echo "\n⚔️ $name attacks Shakuni directly!\n";
        echo "Shakuni is badly defeated!\n";
        echo "🎉 Congratulations $name!\n";

    } elseif ($choice == "use strategy") {

        echo "\n🧠 $name uses intelligence against Shakuni.\n";
        echo "Shakuni is trapped by your strategy!\n";
        echo "🎉 $name defeated Shakuni!\n";

    } else {

        echo "\n❌ Invalid choice!\n";
    }



//              BHIM


} elseif ($ans == "bhim") {

    echo "\n You have chosen BHIM!\n";
    echo "Bhim is extremely powerful.\n\n";

    $choice = strtolower(readline("Do you still want to fight Bhim? (yes/no): "));
    

    if ($choice == "yes") {

        echo "\n💥 Bhim attacks with tremendous power!\n";
        echo "$name is defeated by Bhim! 💀\n";

    } elseif ($choice == "no") {

        echo "\n😎 Smart decision!\n";
        echo "$name escaped before the battle began.\n";

    } else {

        echo "\n❌ Invalid choice!\n";
    }



//           DURYODHAN


} elseif ($ans == "duryodhan") {

    echo "\n👑 You have chosen DURYODHAN!\n";
    echo "Duryodhan challenges $name to a great battle.\n\n";

    echo "1. Mal Yudh\n";
    echo "2. Gadha Yudh\n";
    echo "3. Danush Ban Yudh\n";

    $choice = strtolower(readline("Choose your Yudh: "));

    if ($choice == "mal yudh") {

        echo "\n⚔️ Mal Yudh begins!\n";
        echo "$name fights Duryodhan bravely.\n";
        echo "But Duryodhan defeats $name!\n";
        echo "$name ka GAME OVER!\n";

    } elseif ($choice == "gadha yudh") {

        echo "\n🔨 Gadha Yudh begins!\n";
        echo "$name fights Duryodhan with great strength.\n";
        echo "Duryodhan defeats $name!\n";
        echo "$name ka GAME OVER!\n";

    } elseif ($choice == "danush ban yudh") {

        echo "\n🏹 Danush Ban Yudh begins!\n";
        echo "$name defeats Duryodhan from a distance!\n";
        echo "$name YOU LOSS MY SON!\n";

    } else {

        echo "\n Invalid choice!\n";
    }



//          INVALID INPUT


} else {

    echo "\n Invalid Yodha!\n";
    echo "Please choose:\n";
    echo "Arjun\n";
    echo "Shakuni\n";
    echo "Bhim\n";
    echo "Duryodhan\n";
}

echo "\n==============***=======================\n";
echo "       Thank you for playing!\n";
echo "================***=====================\n";

?>