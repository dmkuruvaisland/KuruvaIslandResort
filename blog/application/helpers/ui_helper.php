<?php
// Send Email
if (!function_exists('get_notification_color')){
    function get_notification_color($notification_type): string {
        $colors = [
            'urgent' => 'danger',
            'important' => 'warning',
            'reminder' => 'info',
            'event' => 'success',
            'announcement' => 'secondary',
        ];
        return $colors[$notification_type] ?? '';
    }
}