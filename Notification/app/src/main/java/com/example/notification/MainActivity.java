package com.example.notification;

import androidx.appcompat.app.AppCompatActivity;
import androidx.core.content.res.ResourcesCompat;

import android.app.Notification;
import android.app.NotificationChannel;
import android.app.NotificationManager;
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
//private static final int NOTIFICATION_ID = 2087;
private static int NOTIFICATION_ID = 2087;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        button = findViewById(R.id.button);
        Drawable drawable = ResourcesCompat.getDrawable(getResources(), R.drawable.videogames, null);
        BitmapDrawable bitmapDrawable = (BitmapDrawable) drawable;
        Bitmap LargeIcon = bitmapDrawable.getBitmap();
        notificationManager = (NotificationManager) getSystemService(NOTIFICATION_SERVICE);  // this is a service provider
        if (Build.VERSION.SDK_INT >= Build.VERSION_CODES.O) {
            notification =  new Notification.Builder(MainActivity.this)
                    .setLargeIcon(LargeIcon)
                    .setSmallIcon(R.drawable.small_ic)
                    .setContentTitle("new Notification")
                    .setSubText("You have 3 new messages")
                    .setChannelId(CHANNEL_ID)
                    .build();
            notificationManager.createNotificationChannel(new NotificationChannel(CHANNEL_ID,"new channel",NotificationManager.IMPORTANCE_HIGH));
        }
        else{
            notification =  new Notification.Builder(MainActivity.this)
                    .setLargeIcon(LargeIcon)
                    .setSmallIcon(R.drawable.small_ic)
                    .setContentTitle("new Notification")
                    .setSubText("You have 3 new messages")
                    .build();
        }
        button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
            notificationManager.notify(NOTIFICATION_ID,notification);
            NOTIFICATION_ID++;
            }
        });
        /*
        * agar same NOTIFICATION_ID rakhte hai toh har new notification mai cureent wali ko replace kr k khud aajayega like whatsapp mai
        * android mai agar ek admi msg kia toh to ek aata hai then dusre baare mai wohi notif mai do msg dhika taa hai naaki new notif aata hai
        *
        * aur agar NOTIFICATION_ID alg alg hogi toh ios mai har msg pai new notif show hota hai waise hi ismai bhi hoga har baar new NOTIFICATION id pai new notif
        * */

    }
}