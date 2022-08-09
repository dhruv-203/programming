package com.example.notification;

import androidx.appcompat.app.AppCompatActivity;
import androidx.core.app.NotificationCompat;
import androidx.core.app.NotificationManagerCompat;

import android.app.NotificationChannel;
import android.app.NotificationManager;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

public class MainActivity extends AppCompatActivity {
Button button;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        button = findViewById(R.id.button);

        button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                NotificationCompat.Builder builder = new NotificationCompat.Builder(MainActivity.this,"Notification");
                builder.setContentTitle("I am Notification");
                builder.setSmallIcon(R.drawable.ic_baseline_voice_chat_24);
                builder.setContentText("Heelo i am from amtioc");
                builder.setAutoCancel(true);
                NotificationManagerCompat mangerCompat = NotificationManagerCompat.from(MainActivity.this);
                mangerCompat.notify(1, builder.build());




            }
        });

    }
}