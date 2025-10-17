<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Lead Submission - AI LifeBOT</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 30px;
            text-align: center;
            border-radius: 10px 10px 0 0;
        }
        .content {
            background: #f9f9f9;
            padding: 30px;
            border-radius: 0 0 10px 10px;
        }
        .lead-info {
            background: white;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
            border-left: 4px solid #667eea;
        }
        .field {
            margin-bottom: 15px;
        }
        .field-label {
            font-weight: bold;
            color: #555;
            display: inline-block;
            width: 120px;
        }
        .field-value {
            color: #333;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
            color: #666;
            font-size: 14px;
        }
        .cta-button {
            display: inline-block;
            background: #667eea;
            color: white;
            padding: 12px 30px;
            text-decoration: none;
            border-radius: 25px;
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>🎯 New Lead Submission</h1>
        <p>AI LifeBOT has received a new lead inquiry</p>
    </div>
    
    <div class="content">
        <h2>Lead Details</h2>
        
        <div class="lead-info">
            <div class="field">
                <span class="field-label">Name:</span>
                <span class="field-value">{{ $lead->name }}</span>
            </div>
            
            <div class="field">
                <span class="field-label">Email:</span>
                <span class="field-value">{{ $lead->email }}</span>
            </div>
            
            @if($lead->company)
            <div class="field">
                <span class="field-label">Company:</span>
                <span class="field-value">{{ $lead->company }}</span>
            </div>
            @endif
            
            @if($lead->service)
            <div class="field">
                <span class="field-label">Service:</span>
                <span class="field-value">{{ $lead->service }}</span>
            </div>
            @endif
            
            @if($lead->message)
            <div class="field">
                <span class="field-label">Message:</span>
                <span class="field-value">{{ $lead->message }}</span>
            </div>
            @endif
            
            <div class="field">
                <span class="field-label">Phone:</span>
                <span class="field-value">{{ $lead->phone }}</span>
            </div>
            
            <div class="field">
                <span class="field-label">Submitted:</span>
                <span class="field-value">{{ $lead->created_at->format('F j, Y \a\t g:i A') }}</span>
            </div>
        </div>
        
        <div style="text-align: center;">
            <a href="mailto:{{ $lead->email }}?subject=Re: AI LifeBOT Inquiry" class="cta-button">
                Reply to Lead
            </a>
        </div>
    </div>
    
    <div class="footer">
        <p>This email was sent from AI LifeBOT Lead Management System</p>
        <p>Lead ID: #{{ $lead->id }}</p>
    </div>
</body>
</html> 