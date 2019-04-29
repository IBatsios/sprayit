<?php

/**
 * Mail Connector: This class's only purpose to bridge the application and the specified email translator class.
 */
class MailConnector {

    private static $translator = MAIL_TRANSLATOR;

    /**
     * MailConnector send method: Bridge method to the email translator class's send method.
     *
     * @author Christopher Thacker
     */
    public static function send($_to = '', $_toName = '', $_subject = '', $_text = '', $_html = '') {
        $mailTranslator = static::$translator;
        $mailTranslator::send($_to, $_toName, $_subject, $_text, $_html);
    }
}