package com.example.customnotification;

import androidx.appcompat.app.AppCompatActivity;
import androidx.core.content.res.ResourcesCompat;

import android.app.Notification;
import android.app.NotificationChannel;
import android.app.NotificationManager;
import android.app.PendingIntent;
import android.content.Intent;
import android.graphics.Bitmap;
import android.graphics.drawable.BitmapDrawable;
import android.graphics.drawable.Drawable;
import android.os.Build;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class MainActivity extends AppCompatActivity {
    Button button;
    NotificationManager notificationManager;
    Notification notification;
    private static final String CHANNEL_ID = "new Notif";
    private static final int NOTIFICATION_ID = 2087;
    private static final int REQ_CODE = 2460;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        button = findViewById(R.id.button);

        // setting the png to bitmap for large icon
        Drawable drawable = ResourcesCompat.getDrawable(getResources(), R.drawable.videogames, null);
        BitmapDrawable bitmapDrawable = (BitmapDrawable) drawable;
        Bitmap LargeIcon = bitmapDrawable.getBitmap();

        // creating a pending intent
        Intent intent = new Intent(MainActivity.this,ChatActivity.class);
        intent.setFlags(Intent.FLAG_ACTIVITY_BROUGHT_TO_FRONT);
        // flag jo hai woh agar activity stack maii pehle se exists hai toh uske saath konsa action perform krna hai woh decide hoha
        PendingIntent pi = PendingIntent.getActivity(MainActivity.this,REQ_CODE,intent,PendingIntent.FLAG_CANCEL_CURRENT);
        // pending intent ka flag jo hai woh agar same screen se wapis notif aaya toh ek hi ending intent do baar hoga toh woh current wale ko update kar dega

        // big picture style
        Notification.BigPictureStyle bigpic = new Notification.BigPictureStyle()
                .bigLargeIcon(LargeIcon)
                .bigPicture(((BitmapDrawable) ResourcesCompat.getDrawable(getResources(),R.drawable.bgpic,null)).getBitmap())
                .setBigContentTitle("I am Big Title")
                .setSummaryText("A new Journey begins from here a lot more to Explore ahead");

        // inbox style
        Notification.InboxStyle inbox = new Notification.InboxStyle()
                .addLine("hello")
                .addLine("there")
                .addLine("i am a student")
                .addLine("i am a student")
                .addLine("i am a student")
                // kitna bhi line add kr lo lekin appear 7 hi hoti hai
                .addLine("i am a student")
                .addLine("i am a student")
                .addLine("i am a student")
                .addLine("i am a student")
                .addLine("i am a student")
                .addLine("i am a student")
                .setBigContentTitle("New Notification")
                .setSummaryText("Description");


        //actual notif process
        notificationManager = (NotificationManager) getSystemService(NOTIFICATION_SERVICE);  // this is a service provider
        if (Build.VERSION.SDK_INT >= Build.VERSION_CODES.O) {
            notification =  new Notification.Builder(MainActivity.this)
                    .setLargeIcon(LargeIcon)
                    .setSmallIcon(R.drawable.small_ic)
                    .setContentTitle("new Notification")
                    .setSubText("You have 3 new messages")
                    .setStyle(bigpic)
                    .setContentIntent(pi)
                    .setChannelId(CHANNEL_ID)
                    .build();
            notificationManager.createNotificationChannel(new NotificationChannel(CHANNEL_ID,"new channel",NotificationManager.IMPORTANCE_HIGH));
        }
        else{
            notification =  new Notification.Builder(MainActivity.this)
                    .setLargeIcon(LargeIcon)
                    .setSmallIcon(R.drawable.small_ic)
                    .setStyle(bigpic)
                    .setContentTitle("new Notification")
                    .setContentIntent(pi)
                    .setSubText("You have 3 new messages")
                    .build();
        }
        button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                notificationManager.notify(NOTIFICATION_ID,notification);
            }
        });

    }

}