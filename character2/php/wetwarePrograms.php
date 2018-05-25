
<? php
/*
Mutant Crawl Classics Shaman Wetware programs
programmed by Mark Tasaka, 2018*/
    
    
function returnPatronID ($patronAI)
{
    if($patronAI === "Achroma")
        {
            $patronValue = 0;
        }
    else if($patronAI === "Gaea")
        {
            $patronValue = 1;
        }
    else if($patronAI === "Hale-e")
        {
            $patronValue = 2;
        }
    else if($patronAI === "Hexacoda")
        {
            $patronValue = 3;
        }
    else if($patronAI === "Mangala")
        {
            $patronValue = 4;
        }
    else if($patronAI === "ME10")
        {
            $patronValue = 5;
        }
    else if($patronAI === "Tetraplex")
        {
            $patronValue = 6;
        }
    else if($patronAI === "Ukur")
        {
            $patronValue = 7;
        }
    else
        {
            $patronValue = 8;
        }
    
    return $patronValue;
    
}



function getWetwareLevel1($patronValue)
{
    $wetwareLevel1Programs = array
    (
    array("1", "Security Override", "10 or varies", "varies", "1 round", "none", "209"),
    array("1", "Elemental Shield", "varies", "varies", "1 round", "none", "209"),
    array("1", "Security Override", "10 or varies", "varies", "1 round", "none", "209"),
    array("1", "Security Override", "10 or varies", "varies", "1 round", "none", "209"),
    array("1", "Security Override", "10 or varies", "varies", "1 round", "none", "209"),
    array("1", "Security Override", "10 or varies", "varies", "1 round", "none", "209"),
    array("1", "Security Override", "10 or varies", "varies", "1 round", "none", "209"),
    array("1", "Security Override", "10 or varies", "varies", "1 round", "none", "209")

    );
        
        return $wetwareLevel1Programs[$patronValue];
    
    
}

/*function getWetwareLevel1($patronAI)
{
    $wetware = [
        //0 Archoma
        {"level": 1, 
         "program": "Security Override",
        "range": "10 or varies",
         "duration": "varies",
         "activation": "1 round",
         "save": "none",
         "page": 209
        },
        
        //1 GAEA
        {"level": 1, 
         "program": "Elemental Shield",
        "range": "varies",
         "duration": "1 round/CL",
         "activation": "1 round",
         "save": "none",
         "page": 215
        },
        
        //2 Hale-e
        {"level": 1, 
         "program": "Sightblinder",
        "range": "self or varies",
         "duration": "varies",
         "activation": "1 round",
         "save": "none",
         "page": 221
        },
                
        //3 Hexacoda
        {"level": 1, 
         "program": "Security Sweep",
        "range": "varies",
         "duration": "varies",
         "activation": "1 round",
         "save": "see page 229",
         "page": 229
        },  
        
        //4 Mangala
        {"level": 1, 
         "program": "Plasma Sword",
        "range": "self",
         "duration": "2 rounds/CL",
         "activation": "1 round",
         "save": "none",
         "page": 235
        },
        
        //5 ME10
        {"level": 1, 
         "program": "Biological Ark",
        "range": "20'",
         "duration": "varies",
         "activation": "1 round",
         "save": "none",
         "page": 243
        },
        
        //6 Tetraplex
        {"level": 1, 
         "program": "Query",
        "range": "Personal",
         "duration": "varies",
         "activation": "1 round",
         "save": "none",
         "page": 249
        },
        
        //7 Ukur
        {"level": 1, 
         "program": "Nanogram",
        "range": "self",
         "duration": "1 turn or...",
         "activation": "1 round",
         "save": "none",
         "page": 255
        }
        
    ];
	
     $wetware[$patronAI]; 
}*/

?>
      