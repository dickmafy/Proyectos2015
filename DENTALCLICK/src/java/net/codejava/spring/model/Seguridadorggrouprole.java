/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package net.codejava.spring.model;

import java.io.Serializable;
import javax.persistence.EmbeddedId;
import javax.persistence.Entity;
import javax.persistence.NamedQueries;
import javax.persistence.NamedQuery;

/**
 *
 * @author DIEGO
 */
@Entity
@NamedQueries({
    @NamedQuery(name = "Seguridadorggrouprole.findAll", query = "SELECT s FROM Seguridadorggrouprole s")})
public class Seguridadorggrouprole implements Serializable {
    private static final long serialVersionUID = 1L;
    @EmbeddedId
    protected SeguridadorggrouprolePK seguridadorggrouprolePK;

    public Seguridadorggrouprole() {
    }

    public Seguridadorggrouprole(SeguridadorggrouprolePK seguridadorggrouprolePK) {
        this.seguridadorggrouprolePK = seguridadorggrouprolePK;
    }

    public Seguridadorggrouprole(long groupid, long organizationid, long roleid) {
        this.seguridadorggrouprolePK = new SeguridadorggrouprolePK(groupid, organizationid, roleid);
    }

    public SeguridadorggrouprolePK getSeguridadorggrouprolePK() {
        return seguridadorggrouprolePK;
    }

    public void setSeguridadorggrouprolePK(SeguridadorggrouprolePK seguridadorggrouprolePK) {
        this.seguridadorggrouprolePK = seguridadorggrouprolePK;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (seguridadorggrouprolePK != null ? seguridadorggrouprolePK.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof Seguridadorggrouprole)) {
            return false;
        }
        Seguridadorggrouprole other = (Seguridadorggrouprole) object;
        if ((this.seguridadorggrouprolePK == null && other.seguridadorggrouprolePK != null) || (this.seguridadorggrouprolePK != null && !this.seguridadorggrouprolePK.equals(other.seguridadorggrouprolePK))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.Seguridadorggrouprole[ seguridadorggrouprolePK=" + seguridadorggrouprolePK + " ]";
    }
    
}
