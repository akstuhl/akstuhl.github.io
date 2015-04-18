// virtual machine errors on startup - setting # of channels (to 1 each) has made it work

.15 => float initgain;
26 => int gainval;
1::second => dur durval;

adc.chan(0) => Gain g1 => LiSa lisaL1 => dac.chan(1);
adc.chan(0) => Gain g2 => LiSa lisaL2 => dac.chan(1);
adc.chan(1) => Gain g3 => LiSa lisaR1 => dac.chan(0);
adc.chan(1) => Gain g4 => LiSa lisaR2 => dac.chan(0);
gainval => g1.gain;
gainval => g2.gain;
gainval => g3.gain;
gainval => g4.gain;

durval => lisaL1.duration;
1 => lisaL1.rate;

durval => lisaL2.duration;
1 => lisaL2.rate;

durval => lisaR1.duration;
1 => lisaR1.rate;

durval => lisaR2.duration;
1 => lisaR2.rate;


Noise n => dac;

int i;
//dur checkPos;
//float maxL, maxR;
//dur maxPosL, maxPosR;
//float maxCheckL, maxCheckR;
while (true) {
    0 => i;
        
    lisaL1.record(1);
    lisaR1.record(1);
    lisaL2.record(0);
    lisaR2.record(0);
    lisaL1.play(0);
    lisaR1.play(0);
    lisaL2.play(0);
    lisaR2.play(0);
    
    initgain => n.gain;

    durval => now;

    0 => n.gain;

    while(i < 10) {
//        0::samp => checkPos;
//        0.0 => maxL;
//        0.0 => maxR;
//        while (checkPos < durval) {
//            lisaL1.valueAt(checkPos) => maxCheckL;
//            if (maxCheckL < 0) -maxCheckL => maxCheckL;
//            if (maxCheckL > maxL) maxCheckL => maxL;
//            lisaR1.valueAt(checkPos) => maxCheckR;
//            if (maxCheckR < 0) -maxCheckR => maxCheckR;
//            if (maxCheckR > maxR) maxCheckR => maxR;
//        }
//        initgain / maxL => g1.gain;
//        initgain / maxR => g3.gain;

        lisaL1.record(0);
        lisaR1.record(0);
        lisaL2.play(0);
        lisaR2.play(0);
        lisaL1.play(1);
        lisaR1.play(1);
        lisaL2.record(1);
        lisaR2.record(1);

        durval => now;
    
//        0::samp => checkPos;
//        0.0 => maxL;
//        0.0 => maxR;
//        while (checkPos < durval) {
//            lisaL2.valueAt(checkPos) => maxCheckL;
//            if (maxCheckL < 0) -maxCheckL => maxCheckL;
//            if (maxCheckL > maxL) maxCheckL => maxL;
//            lisaR2.valueAt(checkPos) => maxCheckR;
//            if (maxCheckR < 0) -maxCheckR => maxCheckR;
//            if (maxCheckR > maxR) maxCheckR => maxR;
//        }
//        initgain / maxL => g2.gain;
//        initgain / maxR => g4.gain;
        
        lisaL2.record(0);
        lisaR2.record(0);
        lisaL1.play(0);
        lisaR1.play(0);
        lisaL2.play(1);
        lisaR2.play(1);
        lisaL1.record(1);
        lisaR1.record(1);
    
        durval => now;
        
        i++;
    }
}