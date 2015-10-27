@extends('emails.layout')

@section('title')
    {{ $subject }}
@endsection

@section('content')
    <table class="main" width="100%" cellpadding="0" cellspacing="0" itemprop="action" itemscope itemtype="http://schema.org/ConfirmAction" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; border-radius: 3px; background-color: #fff; margin: 0; border: 1px solid #e9e9e9;" bgcolor="#fff">
        <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
            <td class="content-wrap" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 20px;" valign="top">
                <meta itemprop="name" content="Confirm Email" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;" />
                <table width="100%" cellpadding="0" cellspacing="0" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                    <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                        <td class="content-block" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;" valign="top">
                            <h3>Estimad@ {{ env('MAIL_CONTACT_NAME') }},</h3>
                        </td>
                    </tr>
                    <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                        <td class="content-block" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;" valign="top">
                            Se ha realizado un nuevo contacto a través de la página web, con la siguiente información:
                            <table>
                                <tr>
                                    <th style="text-align: right">{{ trans('validation.attributes.first_name') }}</th>
                                    <td>{{ $contact->first_name }}</td>
                                </tr>
                                <tr>
                                    <th style="text-align: right">{{ trans('validation.attributes.last_name') }}</th>
                                    <td>{{ $contact->last_name }}</td>
                                </tr>
                                <tr>
                                    <th style="text-align: right">{{ trans('validation.attributes.company') }}</th>
                                    <td>{{ $contact->company }}</td>
                                </tr>
                                <tr>
                                    <th style="text-align: right">{{ trans('validation.attributes.role') }}</th>
                                    <td>{{ $contact->role }}</td>
                                </tr>
                                <tr>
                                    <th style="text-align: right">{{ trans('validation.attributes.phone') }}</th>
                                    <td>{{ $contact->phone }}</td>
                                </tr>
                                <tr>
                                    <th style="text-align: right">{{ trans('validation.attributes.email') }}</th>
                                    <td>{{ $contact->email }}</td>
                                </tr>
                                <tr>
                                    <th style="text-align: right">{{ trans('validation.attributes.message') }}</th>
                                    <td><pre>{{ $contact->message }}</pre></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
                        <td class="content-block" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;" valign="top">
                            <p>Cordiales Saludos.</p>
                            &mdash; Notificaciones Web Openagora
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
@stop