require('dotenv').config();

const {
    APP_HOST = '0.0.0.0',
    APP_PORT = '3000',
} = process.env;

const defaultArgs = ``;

module.exports = {
    apps: [
        {
            name: 'pottorff:queue',
            script: 'artisan',
            interpreter: 'php',
            exec_mode: 'fork',
            instances: 1,

            // Options reference: https://pm2.keymetrics.io/docs/usage/application-declaration/
            args: `queue:work --tries 3 `,
            env: {
                // Pass all env variables along
                ...process.env || {},
            },
        },
        {
            name: 'pottorff:serve',

            script: 'artisan',
            args: `serve --host=${APP_HOST} --port=${APP_PORT}`,
            interpreter: 'php',
            instances: 1,

            env: {
                // Pass all env variables along
                ...process.env || {},
            },
        },
    ],
};
