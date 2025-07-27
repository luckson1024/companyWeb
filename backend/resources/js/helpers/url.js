/**
 * URL Helper functions for handling redirects and base URLs
 */
export const urlHelper = {
    /**
     * Get the base URL for the application
     * @returns {string} The base URL including protocol and host
     */
    getBaseUrl() {
        return window.location.origin;
    },

    /**
     * Create a full URL by combining the base URL with a path
     * @param {string} path - The path to append to the base URL
     * @returns {string} The complete URL
     */
    route(path) {
        const baseUrl = this.getBaseUrl();
        // Remove any leading slashes from the path
        const cleanPath = path.replace(/^\/+/, '');
        return `${baseUrl}/${cleanPath}`;
    },

    /**
     * Redirect to a specific route
     * @param {string} path - The path to redirect to
     * @param {boolean} replace - Whether to replace the current history entry
     */
    redirect(path, replace = false) {
        const url = this.route(path);
        if (replace) {
            window.location.replace(url);
        } else {
            window.location.href = url;
        }
    }
};
